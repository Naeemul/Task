<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    public static function contactFormSubmited($contactData)
    {
        $contact = new Contact();
        $contact->name = $contactData->name;
        $contact->email = $contactData->email;
        $contact->phone = $contactData->phone;
        $contact->address = $contactData->address;
        $contact->message = $contactData->message;
        $contact->reply = '';
        $contact->save();
    }
}
