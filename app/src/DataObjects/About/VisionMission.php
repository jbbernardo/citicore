<?php

namespace {
    use SilverStripe\CMS\Model\SiteTree;
    use SilverStripe\ORM\DataObject;
    
    use SilverStripe\Forms\TabSet;
    use SilverStripe\Forms\Tab;
    use SilverStripe\Forms\TextField;
    use SilverStripe\Forms\TextareaField;
    use SilverStripe\Forms\CheckboxField;
    use SilverStripe\Forms\DateField;
    use SilverStripe\Forms\ReadonlyField;
    use SilverStripe\Forms\DropdownField;
    use SilverStripe\Forms\HTMLEditor\HTMLEditorField;

    use SilverStripe\Forms\GridField\GridField;
    use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
    use UndefinedOffset\SortableGridField\Forms\GridFieldSortableRows;
    use Bummzack\SortableFile\Forms\SortableUploadField;

    use SilverStripe\AssetAdmin\Forms\UploadField;
    use SilverStripe\Assets\Image;
    use SilverStripe\Assets\File;

    use SilverStripe\Versioned\Versioned;
    use SilverStripe\Control\Controller;
    use SilverStripe\Control\HTTPRequest;

    class VisionMission extends DataObject {

        private static $db = [
            'SortOrder' => 'Int',
            'VMTitle' => 'Text',
            'VMDesc' => 'Text',
        ];

        private static $has_one = [
            'AboutPage' => 'AboutPage',
            'VMImg' => Image::class,
        ];

        private static $owns = [

            'VMImg',

        ];

        private static $summary_fields = [
            'SortOrder' => 'Sort Order',
            'VMTitle' => 'Title',
        ];

        public function getCMSFields() {
            $fields = parent::getCMSFields();
            $fields->addFieldToTab('Root.Main', ReadonlyField::create('SortOrder', 'Sort Order'));
            $fields->addFieldToTab('Root.Main', TextField::create('VMTitle', 'Title'));
            $fields->addFieldToTab('Root.Main', TextareaField::create('VMDesc', 'Description'));
            $fields->addFieldToTab('Root.Main', $upload = UploadField::create('VMImg','Image'));

            $fields->removeByName('AboutPageID');
            $fields->removeByName('SortOrder');

            # SET FIELD DESCRIPTION 
            $upload->setDescription('Max file size: 1MB | Dimension: At Least 45px x 45px');
            $upload->setFolderName('about/');

            return $fields;
        }
    }
}
