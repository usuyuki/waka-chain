<?php

declare(strict_types=1);

namespace Usuyuki\WakaChain;

use Usuyuki\WakaChain\WakaInterface;
use Usuyuki\WakaChain\Ogura100;
use Usuyuki\WakaChain\WakaChainInterface;

/**
 * ランダムに和歌チェーンを生成する
 */
class GenerateRandomWakaChain implements WakaChainInterface
{
    public function __construct(
        private Ogura100 $ogura100,
    ) {
    }

    /**
     * 小倉百人一首に含まれる和歌を生成
     *
     */
    public function FromOgura100(): WakaInterface
    {
        return $this->ogura100;
    }
}