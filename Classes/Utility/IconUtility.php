<?php
namespace SIMONKOEHLER\Faicon\Utility;
use \TYPO3\CMS\Core\Core\Environment;

/**
 * Class IconUtility
 */
class IconUtility {
    /**
     * Extract array on dots
     * @param array $array
     * @return array
     */
    public static function iconArray($sourceFile)
    {
        $sourceFile = Environment::getPublicPath().'/'.$sourceFile;
        if(file_exists($sourceFile)){
            $icons_json = file_get_contents($sourceFile);
            $json = json_decode( $icons_json );
            $output = [];
            foreach ( $json as $key => $value ) {
                if($value->styles[0] === 'brands'){
                    $baseClass = 'fab';
                }
                else{
                    $baseClass = 'fa';
                }
                $icon = [$value->label,$baseClass.' fa-'.$key];
                array_push($output,$icon);
            }
        }
        else{
            $output = [['no source file found under: '.Environment::getPublicPath(),'fa fa-warning']];
        }
        return $output;
    }
}
