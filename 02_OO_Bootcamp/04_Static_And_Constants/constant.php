<?php

class BankAccount
{
    const TAX = .09;
}

echo BankAccount::TAX;

//const allows the TAX const to be accessed from outside the class unlike setting it to Private $Tax etc
//Setting it to private still allows Tax to be changed from within the class.
//const does not allow hanging to the variable.
