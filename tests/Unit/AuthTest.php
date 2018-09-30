<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthTest extends TestCase
{
    /**
     * @test
     * @return void
     */
    public function Login(){
        $response = $this->withHeaders([
            'Content-Type' => 'application/json',
            'X-Requested-With' => 'XMLHttpRequest'
        ])->json('POST', 'api/auth/login', [
            'email' => 'johndoe@gmail.com',
            'password' => '123456',
            'remember_me' => true
            ]);
        $response->assertStatus(200)->assertJsonStructure(['access_token']);
    }

    /**
     * @test
     * @return void
     */
    public function GetUser(){
        $response = $this->withHeaders([
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjU5NjRkMjkyOTk1NTA3ODJmMTVlMDY3MTNlNDM5NWYzMzRiM2Q5OTU5NzAwM2FlMjIwYmI5OWY1YmNkYzM4YjUxNzQxMjkxNWQ1MmI0YTI1In0.eyJhdWQiOiIxIiwianRpIjoiNTk2NGQyOTI5OTU1MDc4MmYxNWUwNjcxM2U0Mzk1ZjMzNGIzZDk5NTk3MDAzYWUyMjBiYjk5ZjViY2RjMzhiNTE3NDEyOTE1ZDUyYjRhMjUiLCJpYXQiOjE1MzgyODkwNTYsIm5iZiI6MTUzODI4OTA1NiwiZXhwIjoxNTY5ODI1MDU2LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.KOLbzJy87Cc-ww1514MRvESYOT0HZKPqeGKOrkpUU69wuEgAUubDyZpuAAjDIuCOTh4SkEiqzg4OujYBPzCot3e5mZaFZENSXzWEt8Ud1ePY49bSiVJPBC8DjG89bFHPPQ3JF8iJY7Qm40iDiSqoNHWCCv7jfsXrveYeuQOSKbA2siMtcZj7Qg7B0L6FNWGcZR6N2V4Co97o-ty_y-fO_FJAtGlBAN68HcXBS4gSbf7K0cNn9amoNP8JureiUCLHichUW4yOIeUZ99cFPbTB7HTTyB6JCmAZqWy-VMMZdxlfrW93wseoidYtr1PKkm-deHn3UEhpCOLsYWzrayrdhn2u0PlUKV2yU7m7L6Poh4Px_NCsGPFNg6G1YE43wRDU8tKY0d4Qtqku5VR8lWpoWneDUgrLq0IhEL0jHyeZCz_R8SpG3bO0nN2LVKM7F82Nt2i5Lz27aHGTQoEz2FCTmAblPKNqmIpVYzNIt50oc2-CJmfDmYEznESOMSqTI6gaqJIkRSwTUI1mUNqhIv_noEoH3CuHqYmOU7ZfVwbFbQGACNH4N_CC_F_OyVFBMD5w51uQsMp9zpj79HUkBcG_3DETRCfYhJmBjeY0f4te9RGfaiv04J-RUbW_M12d13IlEEAw-a3BjeDe96daq_T4k2VS3ZrGZE5fOqDIUG1wdvM'
        ])->json('GET', 'api/auth/user');
        $response->assertStatus(200)->assertJsonStructure(['created_at']);
    }

    /**
     * @test
     * @return void
     */
    public function Logout(){
        $response = $this->withHeaders([
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjU5NjRkMjkyOTk1NTA3ODJmMTVlMDY3MTNlNDM5NWYzMzRiM2Q5OTU5NzAwM2FlMjIwYmI5OWY1YmNkYzM4YjUxNzQxMjkxNWQ1MmI0YTI1In0.eyJhdWQiOiIxIiwianRpIjoiNTk2NGQyOTI5OTU1MDc4MmYxNWUwNjcxM2U0Mzk1ZjMzNGIzZDk5NTk3MDAzYWUyMjBiYjk5ZjViY2RjMzhiNTE3NDEyOTE1ZDUyYjRhMjUiLCJpYXQiOjE1MzgyODkwNTYsIm5iZiI6MTUzODI4OTA1NiwiZXhwIjoxNTY5ODI1MDU2LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.KOLbzJy87Cc-ww1514MRvESYOT0HZKPqeGKOrkpUU69wuEgAUubDyZpuAAjDIuCOTh4SkEiqzg4OujYBPzCot3e5mZaFZENSXzWEt8Ud1ePY49bSiVJPBC8DjG89bFHPPQ3JF8iJY7Qm40iDiSqoNHWCCv7jfsXrveYeuQOSKbA2siMtcZj7Qg7B0L6FNWGcZR6N2V4Co97o-ty_y-fO_FJAtGlBAN68HcXBS4gSbf7K0cNn9amoNP8JureiUCLHichUW4yOIeUZ99cFPbTB7HTTyB6JCmAZqWy-VMMZdxlfrW93wseoidYtr1PKkm-deHn3UEhpCOLsYWzrayrdhn2u0PlUKV2yU7m7L6Poh4Px_NCsGPFNg6G1YE43wRDU8tKY0d4Qtqku5VR8lWpoWneDUgrLq0IhEL0jHyeZCz_R8SpG3bO0nN2LVKM7F82Nt2i5Lz27aHGTQoEz2FCTmAblPKNqmIpVYzNIt50oc2-CJmfDmYEznESOMSqTI6gaqJIkRSwTUI1mUNqhIv_noEoH3CuHqYmOU7ZfVwbFbQGACNH4N_CC_F_OyVFBMD5w51uQsMp9zpj79HUkBcG_3DETRCfYhJmBjeY0f4te9RGfaiv04J-RUbW_M12d13IlEEAw-a3BjeDe96daq_T4k2VS3ZrGZE5fOqDIUG1wdvM'
        ])->json('GET', 'api/auth/logout');
        $response->assertStatus(200)->assertJsonStructure(['message']);
    }


}
