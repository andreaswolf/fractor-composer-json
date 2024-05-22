<?php

declare(strict_types=1);

namespace a9f\FractorComposerJson\Tests\RenamePackageComposerJsonFractorRule;

use a9f\Fractor\Testing\PHPUnit\AbstractFractorTestCase;
use a9f\FractorComposerJson\RenamePackageComposerJsonFractorRule;
use Iterator;
use PHPUnit\Framework\Attributes\DataProvider;

final class RenamePackageComposerJsonFractorRuleTest extends AbstractFractorTestCase
{
    #[DataProvider('provideData')]
    public function test(string $filePath): void
    {
        $this->doTestFile($filePath);
        $this->assertThatRuleIsApplied($filePath, RenamePackageComposerJsonFractorRule::class);
    }

    public static function provideData(): Iterator
    {
        return self::yieldFilesFromDirectory(__DIR__ . '/Fixtures', '*.json');
    }

    public function provideConfigFilePath(): ?string
    {
        return __DIR__ . '/config/fractor.php';
    }
}
