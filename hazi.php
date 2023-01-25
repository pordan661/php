<?php
        
        $exampleData3 = [
    'valasztott-szak' => [
        'egyetem' => 'ELTE',
        'kar' => 'IK',
        'szak' => 'Programtervező informatikus',
    ],
    'erettsegi-eredmenyek' => [
        [
            'nev' => 'matematika',
            'tipus' => 'emelt',
            'eredmeny' => '90%',
        ],
        [
            'nev' => 'angol nyelv',
            'tipus' => 'közép',
            'eredmeny' => '94%',
        ],
        [
            'nev' => 'informatika',
            'tipus' => 'közép',
            'eredmeny' => '95%',
        ],
    ],
    'tobbletpontok' => [
        [
            'kategoria' => 'Nyelvvizsga',
            'tipus' => 'B2',
            'nyelv' => 'angol',
        ],
        [
            'kategoria' => 'Nyelvvizsga',
            'tipus' => 'C1',
            'nyelv' => 'német',
        ],
    ],
];
        
        
        
        
        $exampleData2 = [
    'valasztott-szak' => [
        'egyetem' => 'ELTE',
        'kar' => 'IK',
        'szak' => 'Programtervező informatikus',
    ],
    'erettsegi-eredmenyek' => [
        [
            'nev' => 'magyar nyelv és irodalom',
            'tipus' => 'közép',
            'eredmeny' => '70%',
        ],
        [
            'nev' => 'történelem',
            'tipus' => 'közép',
            'eredmeny' => '80%',
        ],
        [
            'nev' => 'matematika',
            'tipus' => 'emelt',
            'eredmeny' => '90%',
        ],
        [
            'nev' => 'angol nyelv',
            'tipus' => 'közép',
            'eredmeny' => '94%',
        ],
        [
            'nev' => 'informatika',
            'tipus' => 'közép',
            'eredmeny' => '95%',
        ],
        [
            'nev' => 'fizika',
            'tipus' => 'közép',
            'eredmeny' => '98%',
        ],
    ],
    'tobbletpontok' => [
        [
            'kategoria' => 'Nyelvvizsga',
            'tipus' => 'B2',
            'nyelv' => 'angol',
        ],
        [
            'kategoria' => 'Nyelvvizsga',
            'tipus' => 'C1',
            'nyelv' => 'német',
        ],
    ],
];
        
        $exampleData5 = [
    'valasztott-szak' => [
        'egyetem' => 'PPKE',
        'kar' => 'IK',
        'szak' => 'Programtervező informatikus',
    ],
    'erettsegi-eredmenyek' => [
        [
            'nev' => 'matematika',
            'tipus' => 'közép',
            'eredmeny' => '90%',
        ],
         [
            'nev' => 'magyar nyelv és irodalom',
            'tipus' => 'közép',
            'eredmeny' => '70%',
        ],
        [
            'nev' => 'történelem',  //francia nyelv
            'tipus' => 'közép',
            'eredmeny' => '80%',
        ],
         [
            'nev' => 'francia nyelv',  //francia nyelv
            'tipus' => 'közép',
            'eredmeny' => '81%',
        ],
        [
            'nev' => 'angol nyelv',
            'tipus' => 'emelt',
            'eredmeny' => '94%',
        ],
        [
            'nev' => 'informatika',
            'tipus' => 'közép',
            'eredmeny' => '95%',
        ],
    ],
    'tobbletpontok' => [
        [
            'kategoria' => 'Nyelvvizsga',
            'tipus' => 'C1',
            'nyelv' => 'angol',
        ],
        [
            'kategoria' => 'Nyelvvizsga',
            'tipus' => 'B2',
            'nyelv' => 'angol',
        ],
    ],
];
        
        
        
        $exampleData4 = [
    'valasztott-szak' => [
        'egyetem' => 'ELTE',
        'kar' => 'IK',
        'szak' => 'Programtervező informatikus',
    ],
    'erettsegi-eredmenyek' => [
        [
            'nev' => 'magyar nyelv és irodalom',
            'tipus' => 'közép',
            'eredmeny' => '15%',
        ],
        [
            'nev' => 'történelem',
            'tipus' => 'közép',
            'eredmeny' => '80%',
        ],
        [
            'nev' => 'matematika',
            'tipus' => 'emelt',
            'eredmeny' => '90%',
        ],
        [
            'nev' => 'angol nyelv',
            'tipus' => 'közép',
            'eredmeny' => '94%',
        ],
        [
            'nev' => 'informatika',
            'tipus' => 'közép',
            'eredmeny' => '95%',
        ],
    ],
    'tobbletpontok' => [
        [
            'kategoria' => 'Nyelvvizsga',
            'tipus' => 'B2',
            'nyelv' => 'angol',
        ],
        [
            'kategoria' => 'Nyelvvizsga',
            'tipus' => 'C1',
            'nyelv' => 'német',
        ],
    ],
];
        
        
        
        $exampleData = [ 'valasztott-szak' => [
        'egyetem' => 'ELTE',
        'kar' => 'IK',
        'szak' => 'Programtervező informatikus',
    ],
    'erettsegi-eredmenyek' => [
        [
            'nev' => 'magyar nyelv és irodalom',
            'tipus' => 'közép',
            'eredmeny' => '70%',
        ],
        [
            'nev' => 'történelem',
            'tipus' => 'közép',
            'eredmeny' => '80%',  // 80
        ],
        [
            'nev' => 'matematika',
            'tipus' => 'emelt',
            'eredmeny' => '90%',
        ],
        [
            'nev' => 'angol nyelv',
            'tipus' => 'közép',
            'eredmeny' => '94%',
        ],
        [
            'nev' => 'informatika',
            'tipus' => 'közép',
            'eredmeny' => '95%',
        ],
    ],
    'tobbletpontok' => [
        [
            'kategoria' => 'Nyelvvizsga',
            'tipus' => 'B2',
            'nyelv' => 'angol',
        ],
        [
            'kategoria' => 'Nyelvvizsga',
            'tipus' => 'C1',
            'nyelv' => 'német',
        ],
    ],
];
        class pontszamitas {
    // az osztály törzse...
    
 
    
     private function elte($hallgato) {
         $vanmatek = false;
         $vankotelezo = false;
         $alappontok = 0;
         $vanmagyar = false;
         $vantortenelem = false;
         $kotvapontok = 0;
         foreach ($hallgato['erettsegi-eredmenyek'] as $targyak){
          //   echo '</br>';
          //   print_r($targyak);
             
            $eredmeny = $targyak['eredmeny'];
             $pos = strpos($eredmeny,'%');
            $eredmeny2 = substr($eredmeny, 0,$pos);
         //   echo "! $eredmeny2 !</br>";
            
            if($eredmeny2<20){
             //   echo 'megbuktál </br>';
                return "hiba, nem lehetséges a pontszámítás a ${targyak['nev']} tárgyból elért 20% alatti eredmény miatt";
            }
            
            
             if(in_array('matematika',$targyak)){
              //   echo 'van matek </br>';
                 $alappontok += $eredmeny2;
                 $vanmatek = true;
             }
             
             if(in_array('informatika',$targyak)){
             //    echo 'van kötelezö </br>';
                 $vankotelezo = true;
                 
                 if($eredmeny2>$kotvapontok){
                     $kotvapontok = $eredmeny2;
                 }
                 
                 
             }
             
               if(in_array('fizika',$targyak)){
             //    echo 'van kötelezö </br>';
                 $vankotelezo = true;
                 if($eredmeny2>$kotvapontok){
                     $kotvapontok = $eredmeny2;
                 }
             }
             
              if(in_array('kémia',$targyak)){
            //     echo 'van kötelezö </br>';
                 $vankotelezo = true;
                 if($eredmeny2>$kotvapontok){
                     $kotvapontok = $eredmeny2;
                 }
                 
                 
             }
             
              if(in_array('biológia',$targyak)){
              //   echo 'van kötelezö </br>';
                 $vankotelezo = true;
                 if($eredmeny2>$kotvapontok){
                     $kotvapontok = $eredmeny2;
                 }
             }
             
             if(in_array('magyar nyelv és irodalom',$targyak)){
            //     echo 'van magyar </br>';
                 $vanmagyar = true;
             }
             if(in_array('történelem',$targyak)){
               //  echo 'van töri </br>';
                 $vantortenelem = true;
             }
             
         }
        
         if($vanmatek===false||$vankotelezo===false||$vanmagyar===false||$vantortenelem===false){
     //        echo "nem lehetséges a pontszámítás </br>";
           return 'hiba, nem lehetséges a pontszámítás a kötelező érettségi tárgyak hiánya miatt';
             
         }
             
             
         $alappontok+=$kotvapontok;
         $alappontok*=2;
      //   echo "$alappontok </br>";
         return $alappontok;
       
    }
    
     private function ppke($hallgato) {
        $vanmatek = false;
         $vankotelezo = false;
         $alappontok = 0;
         $vanangol = false;
         $vanmagyar = false;
         $vantortenelem = false;
         $kotvapontok = 0;
         foreach ($hallgato['erettsegi-eredmenyek'] as $targyak){
          //   echo '</br>';
          //   print_r($targyak);
             
            $eredmeny = $targyak['eredmeny'];
             $pos = strpos($eredmeny,'%');
            $eredmeny2 = substr($eredmeny, 0,$pos);
         //   echo "! $eredmeny2 !</br>";
            
            if($eredmeny2<20){
             //   echo 'megbuktál';
                return "hiba, nem lehetséges a pontszámítás a ${targyak['nev']} tárgyból elért 20% alatti eredmény miatt";
            }
            
            
              if(in_array('angol nyelv',$targyak)&& in_array('emelt', $targyak)){
           //      echo 'van angol emeltszinten</br>';
                 $alappontok += $eredmeny2;
                 $vanangol = true;
             }
            
            
             if(in_array('matematika',$targyak)){
             //    echo 'van matek </br>';
               //  $alappontok += $eredmeny2;
                 $vanmatek = true;
             }
             
             if(in_array('francia nyelv',$targyak)){
           //      echo 'van kötelezö </br>';
                 $vankotelezo = true;
                 
                 if($eredmeny2>$kotvapontok){
                     $kotvapontok = $eredmeny2;
                 }
                 
                 
             }
             
               if(in_array('spanyol nyelv',$targyak)){
             //    echo 'van kötelezö </br>';
                 $vankotelezo = true;
                 if($eredmeny2>$kotvapontok){
                     $kotvapontok = $eredmeny2;
                 }
             }
             
              if(in_array('német nyelv',$targyak)){
            //     echo 'van kötelezö </br>';
                 $vankotelezo = true;
                 if($eredmeny2>$kotvapontok){
                     $kotvapontok = $eredmeny2;
                 }
                 
                 
             }
             
              if(in_array('orosz nyelv',$targyak)){
            //     echo 'van kötelezö </br>';
                 $vankotelezo = true;
                 if($eredmeny2>$kotvapontok){
                     $kotvapontok = $eredmeny2;
                 }
             }
             
              if(in_array('olasz nyelv',$targyak)){
              //   echo 'van kötelezö </br>';
                 $vankotelezo = true;
                 if($eredmeny2>$kotvapontok){
                     $kotvapontok = $eredmeny2;
                 }
             }
             
             
             
             if(in_array('magyar nyelv és irodalom',$targyak)){
            //     echo 'van magyar </br>';
                 $vanmagyar = true;
             }
             if(in_array('történelem',$targyak)){
              //   echo 'van töri </br>';
                 $vantortenelem = true;
                 $vankotelezo = true;
                  if($eredmeny2>$kotvapontok){
                     $kotvapontok = $eredmeny2;
                 }
             }
             
         }
        
         if($vanmatek===false||$vankotelezo===false||$vanmagyar===false||$vantortenelem===false||$vanangol===false){
         //    echo "nem lehetséges a pontszámítás </br>";
             return 'hiba, nem lehetséges a pontszámítás a kötelező érettségi tárgyak hiánya miatt';
             
         }
             
             
         $alappontok+=$kotvapontok;
         $alappontok*=2;
        // echo "$alappontok </br>";
         return $alappontok;
    }
    
    private function tobbletpontok($hallgato) {
        $tobbletpontok = 0;
        $tomb = [];
          foreach ($hallgato['erettsegi-eredmenyek'] as $targyak){
              if(in_array('emelt', $targyak)){
                  $tobbletpontok +=50;
              }
                
          }
        
         // echo "$tobbletpontok </br>";
            foreach ($hallgato['tobbletpontok'] as $pontok){
                if(in_array('Nyelvvizsga', $pontok)){
                    
                    if(in_array('B2', $pontok)&& !(array_key_exists($pontok['nyelv'], $tomb))){
                        $tobbletpontok+=28;
                        $tomb[$pontok['nyelv']] = 'B2';
                      //  array_push($tomb,$pontok['nyelv']);
                    }
                    
                    if(in_array('C1', $pontok)){
                        
                        if(!(array_key_exists($pontok['nyelv'], $tomb))){
                        $tobbletpontok+=40;
                        }
                        else{
                            $tobbletpontok+=12;
                        }
                         $tomb[$pontok['nyelv']] = 'C1';
                    }
                    
                }
                 // echo "$tobbletpontok </br>";
            }
          
          
          
          if($tobbletpontok>100){
              $tobbletpontok = 100;
          }
        
        return $tobbletpontok;
    }


    public  function szamol($hallgato){
  
         $alappontok = 0;
         if($hallgato['valasztott-szak']['egyetem']==='ELTE'){
          //   echo 'ELTE </br> ';
           $alappontok=  $this->elte($hallgato);
         }
         else if($hallgato['valasztott-szak']['egyetem']==='PPKE'){
          //    echo 'PPKE </br> ';
           $alappontok=  $this->ppke($hallgato);
         }
         
         
         if(is_string($alappontok)){
         //    echo "$alappontok </br>";
             return $alappontok;
         }
         
       $tobb =  $this->tobbletpontok($hallgato);
         
       
       
       $osszpont = $tobb + $alappontok;
       
    //   echo "$osszpont </br>";
       return $osszpont;
    }
    
    
   
    
    
  }
        $szamol = new pontszamitas();
        echo  $szamol->szamol($exampleData) ." </br>";
       echo  $szamol->szamol($exampleData2) ." </br>";
        echo  $szamol->szamol($exampleData3) ." </br>";
        echo  $szamol->szamol($exampleData4) ." </br>";
         echo  $szamol->szamol($exampleData5) ." </br>";
        ?>
