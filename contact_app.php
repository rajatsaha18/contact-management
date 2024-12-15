<?php

$contacts = [];

function addContact(array &$contacts, string $name, string $email,  string $phone)
{
    $contacts[] = ['name' => $name, 'email' => $email, 'phone' => $phone];
}

function displayContact(array $contacts)
{
    if(empty($contacts))
    {
        echo "No contacts available";
    }
    else
    {
        foreach($contacts as $contact)
        {
            echo "Name:{$contact['name']} | Email:{$contact['email']} | Phone:{$contact['phone']}\n";
        }
    }
}

//show and choice which entry user
while(true)
{
    echo "\ncontact management menu\n";
    echo "1. Add Contact\n 2. View Contacts\n 3. Exit Contacts\n";

    $choice = (int)readline('Choose an option : ');

    if($choice === 1)
    {
        $name   = readline("Your Name : ");
        $email  = readline("Your Email : ");
        $phone  = readline("Your Phone : ");
        echo "Debug: Name = $name, Email = $email, Phone = $phone\n";
        addContact($contacts, $name, $email, $phone);
        echo "$name added successfully\n";
    }
    elseif($choice === 2)
    {
        displayContact($contacts);
    }
    elseif($choice === 3)
    {
        echo "Exit the choice\n";
        break;
    }
    else
    {
        echo "invalid. please try again";
    }
}