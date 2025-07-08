<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $document_type
 * @property string $document_number
 * @property string|null $phone
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client whereDocumentNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client whereDocumentType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Client whereUpdatedAt($value)
 */
	class Client extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role whereUpdatedAt($value)
 */
	class Role extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|caseassignment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|caseassignment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|caseassignment query()
 */
	class caseassignment extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|casestatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|casestatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|casestatus query()
 */
	class casestatus extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|casetype newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|casetype newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|casetype query()
 */
	class casetype extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|company newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|company query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|company whereUpdatedAt($value)
 */
	class company extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|document newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|document newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|document query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|document whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|document whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|document whereUpdatedAt($value)
 */
	class document extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|economicimpact newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|economicimpact newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|economicimpact query()
 */
	class economicimpact extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|legalcase newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|legalcase newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|legalcase query()
 */
	class legalcase extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|legalopinion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|legalopinion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|legalopinion query()
 */
	class legalopinion extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $content
 * @property bool $read
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|notification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|notification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|notification query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|notification whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|notification whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|notification whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|notification whereRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|notification whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|notification whereUserId($value)
 */
	class notification extends \Eloquent {}
}

