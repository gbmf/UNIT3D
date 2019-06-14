<?php
/**
 * NOTICE OF LICENSE.
 *
 * UNIT3D is open-sourced software licensed under the GNU General Public License v3.0
 * The details is bundled with this project in the file LICENSE.txt.
 *
 * @project    UNIT3D
 *
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html/ GNU Affero General Public License v3.0
 * @author     HDVinnie
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $request_id
 * @property string|null $username
 * @property int $anon
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TorrentRequestClaim newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TorrentRequestClaim newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TorrentRequestClaim query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TorrentRequestClaim whereAnon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TorrentRequestClaim whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TorrentRequestClaim whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TorrentRequestClaim whereRequestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TorrentRequestClaim whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TorrentRequestClaim whereUsername($value)
 * @mixin \Eloquent
 */
class TorrentRequestClaim extends Model
{
    /**
     * The Database Table Used By The Model.
     *
     * @var string
     */
    protected $table = 'request_claims';
}
