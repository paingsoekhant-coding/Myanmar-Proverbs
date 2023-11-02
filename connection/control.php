<?php
class Proverb
{
    public function connect()
    {
        $json_file = 'MyanmarProverbs.json';

        $json_data = file_get_contents($json_file);

        $proVerbsData = json_decode($json_data, true);

        return $proVerbsData;
    }

    public function alphabet()
    {

        $proVerbsData = $this->connect();

        $alphabets = $proVerbsData['Tbl_MMProverbsTitle'];

        return $alphabets;
    }

    public function proverb()
    {
        $proVerbsData = $this->connect();

        $proverbs = $proVerbsData['Tbl_MMProverbs'];

        return $proverbs;
    }

    public function description()
    {
        $proVerbsData = $this->connect();

        $desp = $proVerbsData['Tbl_MMProverbs'];

        return $desp;
    }
}

$proverbs = new Proverb();
