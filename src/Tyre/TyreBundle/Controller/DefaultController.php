<?php

namespace Tyre\TyreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TyreTyreBundle:Default:index.html.twig');
    }
    public function searchAction(Request $request) {
        
        $results = array();
         if ($request->getMethod() == 'POST') {
              $search_for = $request->get('search');
              //getting the searched products from the database
              $repository = $this->getDoctrine()->getRepository('TyreTyreBundle:Products');
              $query = $repository->createQueryBuilder('u')
                ->where("u.name LIKE '%".$search_for."%' or u.name LIKE '%".$search_for."%'")
                ->getQuery();
              $results = $query->getResult();
              
              //adding the XML file products
               $file_url = "bundles/tyretyre/xml/products.xml";
               //Convert the products.XML file into a SimpleXMLElement object
               $simpleXMLElementObject = simplexml_load_file($file_url);
               
                $i=0;
                //the array where will saved the searched products from the XML file
                $xml_result = []; 
                //looping the xml object to find matching results
                while ($simpleXMLElementObject->product[$i]) {

                   //echo $simpleXMLElementObject->product[$i]->name.'<br>';
                   //first we will convert to lower case both searched item and the tested name
                   if (strstr(strtolower($simpleXMLElementObject->product[$i]->name),strtolower($search_for))){
                   //push that element into the array to display it later in the twig file
                    array_push($xml_result, $simpleXMLElementObject->product[$i]);
                   }
                   $i++;
                  }

              //end of products searching from the XML source
             
               //display the detail page with passing the DB result and XML result arrays
           return $this->render('TyreTyreBundle:Default:detail.html.twig', array(
      'results' => $results,'xml_result' => $xml_result));
            }
             return $this->render('TyreTyreBundle:Default:search.html.twig');
    }

    public function detailAction()
    {
        //forward the user to the search page when he tries to access directly to the detail page
        return $this->render('TyreTyreBundle:Default:search.html.twig');
    }
              
   
}
