<?php

use JetBrains\PhpStorm\Pure;

class SquareDance
{
    protected SplQueue $queueMale;
    protected SplQueue $queueFemale;

    public function __construct()
   {
       $this->queueMale = new SplQueue();
       $this->queueFemale = new SplQueue();
   }

   public function addDance( Dance $dance): void
   {
       if($dance->getGender() === GenderInterface::MALE){
           $this->queueMale->enqueue($dance);
       } else {
           $this->queueFemale->enqueue($dance);
       }
   }
   public function pairDance(): string
   {
       while (!$this->queueFemale->isEmpty() || !$this->queueMale->isEmpty()){
           if ($this->queueMale->isEmpty()){
               return count($this->queueFemale).'Nu dang cho'.'<br>';
           }
           if ($this->queueFemale->isEmpty()){
               return count($this->queueMale).'Nam dang cho'.'<br>';
           }
           echo 'cap: '.$this->queueMale->dequeue()->getName().'-'.$this->queueFemale->dequeue()->getName().'<br>';
       }
   }
}