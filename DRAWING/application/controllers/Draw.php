<?php

class Draw extends CI_Controller {

    public function honeycomb() {
        $h1 = $this->uri->segment(3);#row
        $h2 = $this->uri->segment(4);#col
        $all = '';
        $no = '';
        
        for($i=0;$i<6*$h1;$i++){
            for($j=0;$j<6*$h2;$j++){
                if(($i%6==0)){
                    if(($j-2)%6==0 || ($j-3)%6==0){
                        $all .= '*';
                        $no .= $j;
                    }
                    else{
                        $all .= '&nbsp;';
                        $no .= "&nbsp;";
                    }
                }
                else if(($i+1==6*$h1)){
                    if(($j-2)%6==0 || ($j-3)%6==0){
                        $all .= '*';
                        $no .= $j;
                    }
                    else{
                        $all .= '&nbsp;';
                        $no .= "&nbsp;";
                    }

                }
                else
                    $all .= '';
                
                if(($i-1)%6==0 || ($i-4)%6==0){
                    if(($j-1)%6==0 || ($j-4)%6==0){
                        $all .= '*';
                        $no .= "$j";
                    }
                    else{
                        $all .= '&nbsp;';
                        $no .= '&nbsp;';
                    }
                }
                else
                    $all .= '';

                if(($i-2)%6==0 || ($i-3)%6==0){
                    if(($j%6)==0 || ($j+1)%6==0){
                        $all .= '*';
                        $no .= "$j";
                    }
                    else{
                        $all .= '&nbsp;';
                        $no .= '&nbsp;';
                    }
                }
                else
                    $all .= '';
                /*if(($i-1)%6==0 || ($i-4)%6==0){ 
                    if((($j)%6==0 || ($j-2)%4==0))
                        $all .= '*';
                    else 
                        $all = rtrim($all,'&nbsp;');
                }
                else
                    $all .= '';*/
                #$all .= (($i+1)%6==0 || $i%6==0) && (($j-2)%6==0 || ($j-3)%6==0)? '*':'&nbsp;';
                #$all .= (($i-1)%6==0 || ($i-4)%6==0) && (($j)%6==0 || ($j-2)%4==0) ? '*' : '';
                #$all .= (($i-2)%6==0 || ($i-3)%6==0) &&  ($j+1)%6==0? '*' :'';
                #$all .= (($i+1)%6==0 || $i%6==0) && (($j-2)%6==0 || ($j-3)%6==0)? '*':'&nbsp;&nbsp;';
                #$all .= (($i-1)%6==0 || ($i-4)%6==0) ? '&nbsp;*&nbsp;&nbsp;*' : '';
                        #$j%$h2==0? '&nbsp;*&nbsp;&nbsp;*': '*&nbsp;&nbsp;*' : ($j%$h2)==0? '':'';
                
                //New
                /*
                 * /*
                if(($i+1)%6==0 || ($i%6)==0){
                    $all .= '*';
                }
                elseif (condition) {
                    # code...
                }
                else{
                    $all .= '&nbsp;';
                }
                
                #--1
                $all .= (($i+1)%6==0 || $i%6==0) && (($j-2)%6==0 || ($j-3)%6==0)? '*':'&nbsp;';
                $val .= (($i+1)%6==0 || $i%6==0) && (($j-2)%6==0 || ($j-3)%6==0)? "*": (($i-2)%6==0 || ($i-3)%6==0) ? '':'';
                #--2
                $all .= (($i-1)%6==0 || ($i-4)%6==0) && (($j)%6==0 || ($j-2)%4==0) ? '*' : '';
                $val .= (($i-1)%6==0 || ($i-4)%6==0) && (($j)%6==0 || ($j-2)%4==0) ? "*" : '';
                #--3
                $all .= (($i-2)%6==0 || ($i-3)%6==0) &&  (($j+1)%6==0)? '*' :'';
                $val .= (($i-2)%6==0 || ($i-3)%6==0) &&  (($j-1)%6==0 || ($j+1)%6==0)? "*" :'';
                        #$j%$h2==0? '&nbsp;*&nbsp;&nbsp;*': '*&nbsp;&nbsp;*' : ($j%$h2)==0? '':'';
                */
            }
                
            
            $all .= ($i-5)%6!=0?'<br>':'';
            $no .= ($i-5)%6!=0?'<br>':'';
        }
        
        $data['draw'] = $all;
        $data['no'] = $no;
        $this->load->view('drawview/finalview',$data);
    }

    public function hourglass() {
        $num = $this->uri->segment(3);
        $all = '';

        #row
        # i = 0 1
        # i = 1 2
        for ($i = 0; $i < $num; $i++) {
            #column for spaces
            # j = 5-0 = 5 1
            # j = 5-1 = 4 2
            # j = 5-2 = 3 3
            # j = 5-3 = 2 4
            # j = 5-4 = 1 5
                
            for ($j = $num - $i; $j < $num; $j++) {
                $all .= "&nbsp;&nbsp;";
            }
            #column for *
            for ($j = $i; $j < $num; $j++) {
                $all .= "*&nbsp;&nbsp;";
            }

            $all .= "<br>";
        }
        #row inverted
        for ($i = 1 ; $i < $num; $i++) {
            #column for spaces
            #j = 1 , 1 < 4
            #j = 2 , 2 < 4
            #j = 3 , 3 < 4
            #j = 4 , 4 < 4 F
            for ($j = $i; $j < $num-1; $j++) {
                $all .= "&nbsp;&nbsp;";
            }
            #column for *
            for ($j = $num-$i; $j < $num+1; $j++) {
                $all .= "*&nbsp;&nbsp;";
            }

            $all .= "<br>";
        }
        
        #$all .= '* *';
        $data['draw'] = $all;

        $sampleArray = array("title" => 'jas', "title1" => 'jaypee', 'kat');
        //Para maload yung file sa view
        $this->load->view('drawview/finalview', $data);
    }

}
 