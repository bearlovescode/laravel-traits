<?php
    namespace Bearlovescode\LaravelTraits\Models;

    use Illuminate\Database\Eloquent\Concerns\HasUlids;
    use Illuminate\Database\Eloquent\SoftDeletes;

    trait UlidModel
    {
        use HasUlids, SoftDeletes;

        public function getKeyType(): string
        {
            return 'ulid';
        }

        public function getIncrementing(): bool
        {
            return false;
        }
    }