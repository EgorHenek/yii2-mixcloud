<?php
/**
 * @copyright Copyright (c) 2015 Henek
 * @link http://edm.su
 * @license http://http://opensource.org/licenses/MIT MIT License
 */
namespace EgorHenek\mixcloud;

use Yii;
use yii\base\InvalidParamException;
use yii\base\Exception;
use yii\base\Component;

/**
 * Enhanced to work with api mixcloud.
 * @see https://www.mixcloud.com/developers/
 *
 * @author Egor Henek <eagluhih@gmail.com>
 * @link http://www.edm.su/
 */
class Mixcloud extends Component
{
    /**
     * @var string 
     */
    public $clientToken;
    
    public function init ()
    {
        parent::init();
        if (!$this->clientToken) {
            throw new InvalidParamException;
        }
    }
    
    /**
     * Upload mp3 file
     * @param string $mp3 REQUIRED. The audio file to be uploaded. The file should not be larger than 524288000 bytes
     * @param string $name REQUIRED (if a track). The track section song title
     * @param array $params Other params (picture, description ...)
     * @param array $tags Tags (maximum 5)
     * @param array @playlis Playlist
     */
    public function upload ($mp3, $name, $params = [], $tags = [], $playlist = [])
    {
        $request['mp3'] = "@".Yii::getAlias('@webroot/'.$mp3);
        $request['name'] = $name;
        foreach ($params as $param => $value) {
            $request[$param] = $value;
        }
        foreach (array_slice($tags, 0, 5) as $id => $tag) {
            $request['tags-'.$id.'-tag'] = $tag;
        }
        foreach ($playlist as $id => $section) {
            if (is_array($section)) {
                foreach ($section as $key => $value) {
                    $request['sections-'.$id.'-'.$key] = $value;
                }
            }else{
                $request['sections-'.$id.'-chapter'] = $section;
            }
        }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.mixcloud.com/upload/?access_token='.$this->clientToken);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 300);
        $result = curl_exec($ch);
        curl_close($ch);
        $result = json_decode($result, true);
        return $result;
    }
    
}
