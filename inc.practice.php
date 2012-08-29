<?
function showChildren($channel){
	$channel_children = $channel->children();
	foreach ($channel_children as $child) {
		echo $child->getName();
		br();
	}

}
$xmlFile = 'rss.xml';

//$content = new SimpleXMLElement($xmlFile, null, true);
//$channel = $content->channel[0];
//showChildren($channel);

//$keys = $channel->item[1]->xpath('title');
////$keys = $channel->title;
//
//foreach ($keys as $k=>$v) {
//	echo $k. ' > ';
//	echo $v;
//	br();
//}



// вывести все значения внутри всех item
//foreach ($channel->children() as $item) {
//	foreach ($item->children() as $key=> $value) {
//			echo $key.' = ';
//			echo $value;
//			br();
//	}
//}

/*// создать новый файл xml
$newXML = 'genXML.xml';

// From exist File
$xml = <<<XML
<?xml version="1.0" encoding="utf-8" ?>
<personal>
</personal>
XML;
$content = simplexml_load_string($xml);
//$content = new SimpleXMLElement();
$item = $content->addChild('item');
$item->addChild('name', 'Jhon Smith');
$item->addChild('title', 'Mr.');
$item->addChild('position', 'Director');
$item->addAttribute('person', 'yes');

$content->saveXML('pract.xml');
header ('Content-type: text/xml');
echo $content->asXML();
*/

$dom = new DOMDocument();
$dom->loadHTMLFile('test2.xml');

$xpath = new DOMXPath($dom);
$content = $xpath->query('//DL');
foreach ($content  as $value) {
	echo $value->getName();
	br();
}
//echo $dom->saveHTML() ;

?>