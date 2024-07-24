<?php

namespace App\Filament\Resources\PatientResource\Pages;

use App\Filament\Resources\PatientResource;
use Filament\Actions\Concerns\HasWizard;
use Filament\Resources\Pages\CreateRecord;

class CreatePatient extends CreateRecord
{
    use HasWizard;

    protected static string $resource = PatientResource::class;
}
