<?php

declare(strict_types=1);

namespace SystemCore\Services;

use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\ValidationException;

class CoreDataService
{
    private string $dataPath;

    public function __construct()
    {
        $this->dataPath = dirname(__DIR__, 2) . '/storage/data.json';
        $this->ensureStorageExists();
    }

    /**
     * Storage directory 
     */
    private function ensureStorageExists(): void
    {
        $dir = dirname($this->dataPath);

        if (! is_dir($dir)) {
            mkdir($dir, 0755, true);
        }
    }

    /**
     * Data read 
     */
    public function getData(): array
    {
        if (! File::exists($this->dataPath)) {
            return $this->defaultData();
        }

        $content = File::get($this->dataPath);
        $data = json_decode($content, true);

        return is_array($data) ? $data : $this->defaultData();
    }

    /**
     * Data update
     */
    public function updateData(array $values): array
    {
        $data = array_merge($this->getData(), $values);

        $this->validate($data);
        $this->write($data);

        return $data;
    }

    /**
     * Date valid check
     */
    public function isExpired(): bool
    {
        $date = $this->getData()['date'] ?? '';

        if (empty($date)) {
            return false;
        }

        return Carbon::parse($date)->isPast();
    }

    /**
     * Default data structure
     */
    private function defaultData(): array
    {
        return [
            'permission' => true,
            'date' => '',
        ];
    }

    /**
     * Validation logic
     */
    private function validate(array $data): void
    {
        if (! empty($data['date'])) {
            try {
                Carbon::parse($data['date']);
            } catch (\Exception $e) {
                throw ValidationException::withMessages([
                    'date' => ['Invalid date format.'],
                ]);
            }
        }
    }

    /**
     * File write
     */
    private function write(array $data): void
    {
        File::put(
            $this->dataPath,
            json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)
        );
    }
}
