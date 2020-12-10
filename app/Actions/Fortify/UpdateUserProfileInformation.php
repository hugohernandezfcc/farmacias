<?php

namespace App\Actions\Fortify;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function update($user, array $input)
    {
        Validator::make($input, [
            'name'              => ['required', 'string', 'max:255'],
            'email'             => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'photo'             => ['nullable', 'image', 'max:1024'],
            'last_name'         => ['nullable', 'string', 'max:255'],
            'job'               => ['nullable', 'string', 'max:255'],
            'role'              => ['nullable', 'string', 'max:255'],
            'born_date'         => ['nullable', 'string', 'max:255'],
            'phone'             => ['nullable', 'string', 'max:255'],
            'state'             => ['nullable', 'string', 'max:255'],
            'street'            => ['nullable', 'string', 'max:255'],
            'municipality'      => ['nullable', 'string', 'max:255'],
            'exterior_number'   => ['nullable', 'string', 'max:255'],
            'postal_code'       => ['nullable', 'string', 'max:255']
        ])->validateWithBag('updateProfileInformation');

        if (isset($input['photo'])) {
            $user->updateProfilePhoto($input['photo']);
        }

        if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'name' => $input['name'],
                'email' => $input['email'],
            ])->save();
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    protected function updateVerifiedUser($user, array $input)
    {
        $user->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
            'email_verified_at' => null,
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}
