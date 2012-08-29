<?php
$xml = 'text.xml';
$xmlNcp = 'ncp.xml';
$library = null;

// Get Object 1
//$xmlstr = file_get_contents($xml);
//$library = simplexml_load_string($xmlstr);

class helloSimpleXMLElement extends SimpleXMLElement{
	function getHello(){
		echo "<p>Hey it's new class helloSimpleXMLElement!</p>";
	}
}

// Get Object 2
//$library = simplexml_load_file($xml, 'helloSimpleXMLElement', true);

// Get Object 3
//$library = new SimpleXMLElement('http://mni/'.$xml, null, true);
// Get Object 4
$library = new SimpleXMLElement($xml, null, true);

if ( gettype($library) !== 'object' ) die('Content is empty');

//$library->getHello();
$book = $library->addChild('book');
$book->addAttribute('isbn', '12345');
$book->addChild('title', 'jQuery in action');
$book->addChild('author', 'Iehuda Katz');
$book->addChild('poublisher', 'O\'Raily');

//header('Content-type: text/xml'); echo $library->asXML(); die();
//$library->asXML('testest.xml');

//foreach ($library->book as $book) {
//	echo $book['isbn'];
//	echo $book->title.PHP_EOL;
//}
//br();
//foreach ($library->children() as $child) {
//	echo $child->getName(); br();
//	foreach ($child->attributes() as $attr) {
//		echo $attr->getName(); br();
//	}
//	foreach ($child->children() as $subchild){
//		echo $subchild->getName(); br();
//	}
//	br();
//}

//$result = $library->xpath('/library/book/title');
//$result = $library->book[0]->xpath('title');
//foreach ($result as $title){
//	echo $title;br();
//}
//
//$nsFile = new SimpleXMLElement($xmlNcp, null, true);
//$nsp = $nsFile->getDocNamespaces();
//foreach ($nsp as $key=>$value){
//	echo $key, ' > ', $value; br();
//}
//br();
//$nsp = $nsFile->getNamespaces(true);
//foreach ($nsp as $key=>$value){
//	echo $key, ' > ', $value; br();
//}

$dom = new DOMDocument();
$dom->load($xmlNcp);
$xpath = new DOMXPath( $dom );
$xpath->registerNamespace("lib", "http://example.org/library");
$result = $xpath->query("//lib:title/text()");
foreach ($result as $value) {
	echo $value->data;br();
}
//$dom->loadHTML();
//$dom->loadHTMLFile();

?>