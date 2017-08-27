<?php

class Draw extends CI_Controller {
    
    public function honeycomb(){
        $col = $this->uri->segment(3);
        $row = $this->uri->segment(4);
        $val = '';//data to pass in the view
        $sam = '';//sample
        $endRight = false;//to know if asterisk is in the last line
        $right = false;
        //this loop for creating a honeycomb 
        //since it has 6 sides, I multiply it by no. of rows
        //So per honeycombs, it has 6 rows
        for($i = 0;$i < (6 * $row);$i++){
            for($j= 0;$j < $col;$j++){
                #$sam .= "$i - ";
                #for every divisible by 6
                #since it has 6 sides, it must be all divisible by 6
                #0/6 = 0 == 0        #5+1 = 6  6 == 30 = (5*6)
                #
                if(($i%6)== 0 ){
                    $val .= '&nbsp;&nbsp;**';
                    $sam .= '&nbsp;&nbsp;'.$i.$i;
                }
                else if(($i+1) == $row*6){
                    $val .= '&nbsp;&nbsp;**';
                    $sam .= '&nbsp;&nbsp;'.$i.$i;
                }

                    #1-1=0%6==0   #4-4=0%6=0
                    #7-1=6%6==0   #10-4=%6==0
                    #
                    #2-1=1%6

                    #1+1=2%2=0   #4-4=0%2==0
                    #7+1=8%2=0   #10-4=6%2=0 
                    #di pwede sa lahat ng even dahil mag-iinsert ng mag-iinsert ng asterisk kada may even


                if(($i-1)%6==0 || ($i-4)%6==0){
                    if($col > 1){

                        #for 2nd row
                        if($j%$col==0)
                            $val .= '&nbsp;*&nbsp;&nbsp;*';
                        else   
                            $val .= '*&nbsp;&nbsp;*';
                        #if()
                         #   $val .= '*&nbsp;';
                        
                        $sam .= '&nbsp;'.$j.'&nbsp;&nbsp;'.$j.$j;
                        #if($j == 0)
                        #    $val .= '&nbsp;*';
                        #else
                        #    $val .= '&nbsp;*&nbsp;&nbsp;**&nbsp;';
                        /*if($right){
                            $val .= '&nbsp;*&nbsp;&nbsp;*'; 
                            $right=false;
                        }
                        else{
                            $right = true;
                        }
                        */
                    }
                    else{
                        $val .= '&nbsp;*&nbsp;&nbsp;*';
                        $sam .= '&nbsp;'.$i.'&nbsp;'.$i;
                    }

                }


                #For the middle part of the honeycomb
                if(($i-2)%6==0){
                    $val .= '*&nbsp;&nbsp;&nbsp;&nbsp;';
                    $sam .= $i.'&nbsp;&nbsp;'.$i;
                    $endRight = true;
                }
                else if(($i-3)%6==0){
                    $val .= '*&nbsp;&nbsp;&nbsp;&nbsp;';
                    $sam .= $i.'&nbsp;&nbsp;'.$i;
                    $endRight = true;

                }
                if($endRight){
                    if($j+1 == $col)
                        $val .= '*';
                        #$val .= "*END";
                    $endRight=false;
                }

                
            }

            #Checks if the $i is divisible by 6

            $val .= ($i-5)%6==0?'':'<br>';
            $sam .= ($i-5)%6==0?'':'<br>';
            
        }

        $data['val'] = $val;
        $data['sam'] = $sam;
        $this->load->view('draw/index',$data);
    }
    
    public function hourglass(){
        #Nagawa ko na to sir nung 1st year buti nalang HAHAHAHA
        $num = $this->uri->segment(3);
        $val = '';//data to pass in the view\
        $sam = '';
        if($num == 1){
            $val = "*";
        }
        else{
            for($i=$num;$i >= 1;$i--){
                
                for($space = $num-$i;$space >= 1;$space--)
                    $val .= "&nbsp;&nbsp;&nbsp;";
                for($ast = $i;$ast >= 1; $ast--)    
                    $val .= "&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;";
                for($space = $num-$i;$space >= 1;$space--)
                    $val .= "&nbsp;";

                $val .= '&nbsp;<br/>';
            }

            for($i=2;$i<=$num;$i++){
                for($space = $num-$i;$space >= 1;$space--)
                    $val .= "&nbsp;&nbsp;&nbsp;";
                for($ast = $i;$ast >= 1; $ast--)    
                    $val .= "&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;";
                for($space = $num-$i;$space >= 1;$space--)
                    $val .= "&nbsp;";

                $val .= '&nbsp;<br/>';
            }
        }


        $data['val'] = $val;
        $data['sam'] = $sam;
        $this->load->view('draw/index',$data);
    
    }
    
    
}
