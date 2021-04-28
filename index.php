<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prework 7</title>
</head>
<body>
<?php 

            // class Test 
            // {
            // public $message= "this is Abudlla al rakib";
            // public function printmessage(){
            // return $this->message;
            // }
            // }
            // $var = new test();
            // echo $var->printmessage();

        
            


            // class SleptPassYear{


            //     public function calspassYear($hourSleptPerNight,$age){

            //         $totalSleptYears=round((($age*($hourSleptPerNight*365))/24)/365);


            //         return $totalSleptYears;
            //     }
            // }

            // $mySleptYears=new SleptPassYear();
            // $rtnVal =$mySleptYears->calspassYear(8,32);
            // print "you have slept $rtnVal years of your life away!";

            


                // class FruitConstructor{
                //     public $apples;
                //     public $oranges;
                //     public $bananas;
                //     function __construct($apple_arg,$orange_arg,$banana_arg)
                //     {
                //         $this->apples=$apple_arg;
                //         $this->oranges=$orange_arg;
                //         $this->bananas=$banana_arg;

                //     }

                //  public function addFruit(){
                //  $totalFruit= $this->apples+$this->oranges+
                //         +$this->bananas;

                //         return $totalFruit;
                //     }

                    
                    
                // }
                
                // $varTotalFruit= new FruitConstructor(4,3,8);
                // $value=$varTotalFruit->addFruit();

                // print"you have total $value pices of fruits";



             
                class Employee {
                    public $salary = "3500";
                }
                
                class Driver  extends Employee {
                   public $name = "John";
                   public $position = "driver";
                   public  function showDetails() {
                        return 
                       'My name is '  . $this->name .
                
                        ' and my position in the company is ' . $this ->position ."<br/>". ' my monthly salary is ' . $this->salary . ' Euros' ;
                   }
                }
                $driverObj = new Driver();
                $result = $driverObj->showDetails();
                echo $result."<br/>";
            



                class Car {

                    //A private property or method can be used only by the parent.
                    private $model;

                    private $ownerName;
                 
                    // Public methods and properties can be used
                    // by both the parent and the child classes.
                    public function setModel($model)
                    {
                        $this->model = $model;
                 
                     }
                 
                    public function getModel ()
                    {
                         return $this->model;
                    }

                    public function setOwnerName($ownerName)
                    {
                        $this->ownerName=$ownerName;
                    }

                    public function getOwnerName()
                    {
                    return $this->ownerName;
                    }


                 }
                 
                 
                 // The child class can use the code it
                 // inherited from the parent class,
                 // and it can also have its own code
                 class SportsCar extends  Car {
                 
                    private $style = 'fast and furious' ;
                 
                    public function driveItWithStyle()
                    {
                        return 'Drive a ' . $this->getModel() . ' <i>'  . $this->style . '</i> and owner is '. $this->getOwnerName();
                    }
                 }
                 
                 
                 //create an instance from the child class
                 $sportsCar1 = new SportsCar();
                 $sportsCar2 = new SportsCar();
                 
                 // Use a method that the child class inherited from the parent class
                 $sportsCar1->setOwnerName("abdulla");
                 $sportsCar1->setModel('Ferrari');
                 $sportsCar2->setOwnerName("rakib");
                 $sportsCar2->setModel('Toyata');
                 
                 // Use a method that was added to the child class
                 echo $sportsCar1->driveItWithStyle()."<br/>";
                 echo $sportsCar2->driveItWithStyle()."<br/>";







































            

?>

    
</body>
</html>