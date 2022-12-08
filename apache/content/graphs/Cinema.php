<?php

use Nelmio\Alice\Throwable\LoadingThrowable;

class Cinema
{
    var int $year_2015, $year_2016, $year_2017, $year_2018, $year_2019;

    public function __toString(): string
    {
        return sprintf(
            '[%s,%s,%s,%s,%s]',
            $this->year_2015,
            $this->year_2016,
            $this->year_2017,
            $this->year_2018,
            $this->year_2019);
    }

    /**
     * @throws LoadingThrowable
     */
    public static function get_data_set(): array
    {
        $loader = new Nelmio\Alice\Loader\NativeLoader();

        $objectSet = $loader->loadData([
            Cinema::class => [
                'human{1..51}' => [
                    'year_2015' => '<numberBetween(50, 1000)>',
                    'year_2016' => '<numberBetween(50, 1000)>',
                    'year_2017' => '<numberBetween(50, 1000)>',
                    'year_2018' => '<numberBetween(50, 1000)>',
                    'year_2019' => '<numberBetween(50, 1000)>',
                ],
            ]
        ]);
        return $objectSet->getObjects();
    }
}