<?php
    namespace Bearlovescode\LaravelTraits\Models;

    use Illuminate\Database\Eloquent\Concerns\HasUuids;
    use Illuminate\Database\Eloquent\SoftDeletes;

    trait UuidModel
    {
        use HasUuids, SoftDeletes;

        public function getKeyType(): string
        {
            return 'uuid';
        }

        public function getIncrementing(): bool
        {
            return false;
        }
    }