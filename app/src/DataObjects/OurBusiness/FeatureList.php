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

    class FeatureList extends DataObject {

        private static $db = [
            'SortOrder' => 'Int',
            'FLTitle' => 'Text',
            'FLSubTitle' => 'Text',
            'FLDesc' => 'Text',
        ];

        private static $has_one = [
            'BusinessPage' => 'BusinessPage',
            'FLImg' => Image::class,
        ];

        private static $owns = [
            'FLImg',
        ];

        private static $summary_fields = [
            'SortOrder' => 'Sort Order',
            'FLTitle' => 'Title',
            'FLDesc' => 'Description',
        ];

        public function getCMSFields() {
            $fields = parent::getCMSFields();
            $fields->addFieldToTab('Root.Main', ReadonlyField::create('SortOrder', 'Sort Order'));
            $fields->addFieldToTab('Root.Main', TextField::create('FLTitle', 'Title'));
            $fields->addFieldToTab('Root.Main', TextField::create('FLSubTitle', 'Subtitle'));
            $fields->addFieldToTab('Root.Main', TextField::create('FLDesc', 'Description'));
            $fields->addFieldToTab('Root.Main', $upload = UploadField::create('FLImg','Image'));

            $fields->removeByName('BusinessPageID');
            $fields->removeByName('SortOrder');

            # SET FIELD DESCRIPTION 
            $upload->setDescription('Max file size: 1MB | Dimension: At Least 60px x 50px');
            $upload->setFolderName('business/titlePage');

            return $fields;
        }
    }
}
