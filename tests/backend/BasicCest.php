<?php

use \BackendTester;

class SetupPluginCest {

    /**
     * @param \BackendTester $I
     * @group dev
     * @author Alex Tsumarov <atsumarov@scnsoft.com>
     */
    public function dev(BackendTester $I) {

        $I->amOnPage('bla');
		
		$I->makeScreenshot(1);
    }

}

