<?php

use Cerbero\OctaneTestbench\TestsOctaneApplication;

it('loads Octane Testbench', fn () => $this->assertContains(TestsOctaneApplication::class, class_uses($this)));
