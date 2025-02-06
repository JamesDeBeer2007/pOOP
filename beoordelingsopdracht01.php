<?php
class BankAccount
{
    public $balance;
    public $accountNumber;

    public function __construct($balance, $accountNumber)
    {
        $this->balance = $balance;
        $this->accountNumber = $accountNumber;
    }

    public function setAccountNumber($accountNumber): string
    {
        $this->accountNumber = $accountNumber;
        return "Uw bankaccount nummer is gewijzigd in: $accountNumber";
    }

    public function getAccountNumber(): string
    {
        return $this->accountNumber;
    }

    public function setBalance($balance): void
    {
        $this->balance = $balance;
    }

    public function getBalance(): string
    {
        return number_format($this->balance, 2, ',', '.');
    }

    public function deposit($amount): string
    {
        if ($amount > 0) {
            $this->balance += $amount;
            return "U heeft €" . number_format($amount, 2, ',', '.') . " op uw bankaccount gezet. Uw huidige saldo is: €" . $this->getBalance();
        } else {
            return "Ongeldig stortingsbedrag.";
        }
    }

    public function withdraw($amount): string
    {
        if ($amount > 0 && $this->balance >= $amount) {
            $this->balance -= $amount;
            return "U heeft €" . number_format($amount, 2, ',', '.') . " opgenomen. Uw huidige saldo is: €" . $this->getBalance();
        } elseif ($amount > 0 && $this->balance < $amount) {
            return "U heeft onvoldoende saldo om €" . number_format($amount, 2, ',', '.') . " op te nemen.";
        } else {
            return "Ongeldig opnamebedrag.";
        }
    }
}

$account = new BankAccount(1000, "123456789");
echo "Uw bankaccount nummer is: " . $account->getAccountNumber() . "<br>";
echo "Uw huidige saldo is: €" . $account->getBalance() . "<br>";
echo $account->deposit(500) . "<br>";
echo $account->withdraw(200) . "<br>";
echo $account->withdraw(1500) . "<br>";
echo $account->setAccountNumber("987654321") . "<br>";
echo "Uw bankaccount nummer is: " . $account->getAccountNumber() . "<br>";
echo "Uw huidige saldo is: €" . $account->getBalance() . "<br>";

var_dump($account);
?>
