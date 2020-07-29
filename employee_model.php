<?php
date_default_timezone_set("America/Los_Angeles");


class employee {
    var $empl;
    var $appointment_date;
    public $conflict_hours = array(); // Array of conflict hours, current appoinmtnets 
    public $current_time;
    public $arr_times_av = array('07:00 am','07:30 am','08:00 am','08:30 am','09:00 am','09:30 am', '10:00 am','10:30 am','11:00 am','11:30 am','12:00 pm','12:30 pm','01:00 pm','01:30 pm','02:00 pm','02:30 pm','03:00 pm',
    '03:30 pm','04:00 pm','04:30 pm','05:00 pm','05:30 pm','06:00 pm','06:30 pm','07:00 pm'); // Might need to include breaks and lunch breaks;
    public $time_frame = array();
    public $day_off = array(); // 0 sunday -> 6 saturday
    public $date_num;


    /*
    1. OBJ -> EmployeeName, AppoinmentDate, Conflict Hours(DB Return), CurrentTime, EmployeeTimeFrame, EmployeeDaysOff, DateBasedNumberic
    2. 
    */
    function __construct($name,$date_app, $conflict_hours, $current_time, $empl_timeframe, $days_off, $day_num){
        $this->empl = $name;
        $this->appointment_date = $date_app;
        $this->time_frame = $empl_timeframe;
        $this->conflict_hours = $conflict_hours;
        $this->current_time = $current_time;
        $this->day_off = $days_off;
        $this->date_num = $day_num;
         
        // If this is false, Appointment is for another date
        // If true, Appointment is for today and we need to remove times passed;

     }

     function setConflictArray($c_array) {$c_array = $conflict_hours; return $c_array;}
     function returnDate(){return date("m/d/o");}
     function returnTime(){return date("h:i:a");}
     
     function getEmpl() {return $this->empl;}
     function getDaySched() {return $this->day_sched;}
     function getHourSched() {return $this->hour_sched;}

     function correctArrayTimeFrame() {
        if ($key = array_search($this->date_num, $this->day_off)){
            // Current Date is day off
            $var = array('Day off for employee, try another date');
            return $var;
        }

       $copyArr = $this->arr_times_av;
       $bad_times = (array)null;
       
        for($i =0; $i < count($copyArr);$i++){
            if(strtotime($copyArr[$i]) < strtotime($this->time_frame[0]) ){
                // Times less than start time
               
               array_push($bad_times,$copyArr[$i]);
               continue;

            }
            if(strtotime($copyArr[$i]) > strtotime($this->time_frame[1]) ){
                // Greater than
                
                array_push($bad_times,$copyArr[$i]);
                continue;
            }

           }
           for ($i=0; $i < count($bad_times) ;$i++){
               $key = array_search($bad_times[$i],$copyArr);
               if($key !== false){
                   unset($copyArr[$key]);
               }
           }
           
        
        return returnCorrectFinalArray($copyArr);
    }

    function appIsToday(){
        if($this->returnDate() === $this->appointment_date &&  strtotime($this->current_time) > strtotime( end($this->correctBasedOnCurrentDate()) )  ){
            return 1;
        }
        if($this->returnDate() === $this->appointment_date){
            return 0;
        }
        return 2;
    }

     function correctBasedOnCurrentDate() {
            // We have to remove based on time;
        $counter = 0;
        $corrected = $this->correctArrayTimeFrame();
        for($i= 0; $i < count($corrected);$i++){
                //echo $corrected[$i];    
            if(strtotime($corrected[$i]) < strtotime($this->current_time)){
                //echo $corrected[$i];
                $counter ++;
                continue;
            }
                
        }
        $vv = array_slice($corrected, $counter);
        return array_values($vv);  
     }


     // return conflict hours, where db exist
     function returnCorrectFinalArray($array_corrected) {
         // Check array of conflicted hours
         // If greater than 0 we remov
        array_values($array_corrected);
         if(count($this->conflict_hours) > 0){
            for($i =0 ; $i < count($this->conflict_hours);$i++){
                $key = array_search($this->conflict_hours[$i], $array_corrected);
                if($key !== false){
                    unset($array_corrected[$key]);
                    continue;
                }
            }
            return array_values($array_corrected);
         }else {
             return array_value($array_corrected);
         }
         
     }






}



