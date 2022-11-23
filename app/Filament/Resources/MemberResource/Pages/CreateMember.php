<?php

namespace App\Filament\Resources\MemberResource\Pages;

use App\Filament\Resources\MemberResource;
use App\Models\Package;
use Carbon\Carbon;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateMember extends CreateRecord
{
    protected static string $resource = MemberResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $getPackage = Package::find($data['package_id']);
        $data['membership_end'] = Carbon::parse($data['membership_start'])->addMonth($getPackage->month_duration)->toDateString();

        return static::getModel()::create($data);
    }
}
