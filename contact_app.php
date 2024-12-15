<?php

$contacts = [];

// store contact array where input users data
function addContact(array &$contacts, string $name, string $email,  string $phone)
{
    $contacts[] = ['name' => $name, 'email' => $email, 'phone' => $phone];
}

// display users data
function displayContact(array $contacts)
{
    // if empty contacts data
    if(empty($contacts))
    {
        echo "No contacts available";
    }
    else
    {
        // show data loop wise users contact data
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

    // user input
    $choice = (int)readline('Choose an option : ');

    // check choice
    if($choice === 1)
    {
        $name   = readline("Your Name : ");
        $email  = readline("Your Email : ");
        $phone  = readline("Your Phone : ");
        // check debug user correct choose data
        echo "Debug: Name = $name, Email = $email, Phone = $phone\n";
        addContact($contacts, $name, $email, $phone);
        echo "$name added successfully\n";
    }
    elseif($choice === 2)
    {
        displayContact($contacts); // if choice 2 then show users display contact
    }
    elseif($choice === 3)
    {
        echo "Exit the choice\n"; // if choice 3 exit the choice
        break;
    }
    else
    {
        echo "invalid. please try again";
    }
}