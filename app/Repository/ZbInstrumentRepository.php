<?php
namespace App\Repository;

use PHPHtmlParser\Dom;
use App\Model\ZbInstrument;
use App\Service\StringUtilities;
use App\Service\ZbClient;

class ZbInstrumentRepository extends ZbClient{

    private string $baseUrl = 'https://www.zonebourse.com';
    private string $searchUrl = '/recherche/instruments?q=';
    private string $searchEndUrl = '&vue=company';

    public function findAllByKeyword(string $keyword): array
    {
        $dom = new Dom();
        $dom->loadFromUrl($this->baseUrl . $this->searchUrl . strtoupper($keyword) . $this->searchEndUrl);

        $tableContainer = $dom->getElementById('advanced-search__instruments');
        $table = $tableContainer->find('tbody');
        $rows = $table->find('tr');
        
        $instruments = [];
        foreach($rows as $row){
            $instrument = new ZbInstrument();
            $instrument
                ->setId(intval($row->find('a')[1]->getAttribute('data-code')))
                ->setName(htmlspecialchars_decode($row->find('a')[0]->text()))
                ->setCode(StringUtilities::removeStartEndWhiteSpaces($row->find('td')[2]->text()))
                ->setLink($row->find('a')[0]->getAttribute('href'))
                ->setExchange_place(StringUtilities::removeStartEndWhiteSpaces($row->find('td')[3]->find('p')->text()));
            
                $instruments[] = serialize($instrument);
        }
        return $instruments;
    }

    public function findGraphLink(ZbInstrument $zbInstrument): ZbInstrument
    {
        if(isset($_SESSION['log'])){
            $this->log($_SESSION['log']['email'], $_SESSION['log']['password']);
        }

        $url = $this->baseUrl . $zbInstrument->getLink() . "graphiques/";
        $this->client->request("GET", $url);
        $this->crawler = $this->client->waitFor("#prt_dynamic_chart_" . $zbInstrument->getId());
        $grapLink = $this->crawler->filter("#prt_dynamic_chart_" . $zbInstrument->getId())->getAttribute('src');
        $zbInstrument->setGraph_link(htmlspecialchars_decode($grapLink));

        $this->client->quit();

        return $zbInstrument;

    }
}