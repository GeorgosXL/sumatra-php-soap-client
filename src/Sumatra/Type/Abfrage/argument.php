<?php

namespace Sumatra\Type;

class Abfrage_argument
{

    /**
     * @var string
     */
    private $sumatra_id;

    /**
     * @var string
     */
    private $winmakler_id;

    /**
     * @var string
     */
    private $vorname;

    /**
     * @var string
     */
    private $zuname;

    /**
     * @return string
     */
    public function getSumatra_id()
    {
        return $this->sumatra_id;
    }

    /**
     * @param string $sumatra_id
     * @return Abfrage_argument
     */
    public function withSumatra_id($sumatra_id)
    {
        $new = clone $this;
        $new->sumatra_id = $sumatra_id;

        return $new;
    }

    /**
     * @return string
     */
    public function getWinmakler_id()
    {
        return $this->winmakler_id;
    }

    /**
     * @param string $winmakler_id
     * @return Abfrage_argument
     */
    public function withWinmakler_id($winmakler_id)
    {
        $new = clone $this;
        $new->winmakler_id = $winmakler_id;

        return $new;
    }

    /**
     * @return string
     */
    public function getVorname()
    {
        return $this->vorname;
    }

    /**
     * @param string $vorname
     * @return Abfrage_argument
     */
    public function withVorname($vorname)
    {
        $new = clone $this;
        $new->vorname = $vorname;

        return $new;
    }

    /**
     * @return string
     */
    public function getZuname()
    {
        return $this->zuname;
    }

    /**
     * @param string $zuname
     * @return Abfrage_argument
     */
    public function withZuname($zuname)
    {
        $new = clone $this;
        $new->zuname = $zuname;

        return $new;
    }


}

