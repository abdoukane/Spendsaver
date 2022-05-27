<?php

 function getAllPosts(){

  $postArray  =[
     1 =>['Title' => 'Experience',
         'Content' => 'I have currently taken intro to computer science where I learned Java and I have also taken Data Structures and Algorithms. I am currently working as a coding
         fellow with a local company to become a more confident coder on both ends of the spectrum when it comes to front and back end development.'
  ],
     2=>['Title' => 'Who Am I?',
        'Content'=>  'I am a really big sneakerhead. I began reselling shoes in 8th grade as a way to make enough money to purchase the shoes that I wanted. This is where I began becoming a more business oriented person.
             I also love animals, I have a pitbull named Gotti. In addition, I enjoy just being outside and not cooped up in the house.'
     ]

]; 

return $postArray;
}

function getPost(){
    $posts = getAllPosts();
    $post = $posts[$index];
    return $post;
}