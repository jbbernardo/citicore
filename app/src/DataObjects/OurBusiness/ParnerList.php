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

    class PartnerList extends DataObject {

        private static $db = [
            'SortOrder' => 'Int',
            'PLTitle' => 'Text',
            'PLDesc' => 'Text',
        ];

        private static $has_one = [
            'RetailElectricitySupplyPage' => 'RetailElectricitySupplyPage',
            'PLImg' => Image::class,
        ];

        private static $owns = [
            'PLImg',
        ];

        private static $summary_fields = [
            'SortOrder' => 'Sort Order',
            'PLTitle' => 'Title',
        ];

        public function getCMSFields() {
            $fields = parent::getCMSFields();
            $fields->addFieldToTab('Root.Main', ReadonlyField::create('SortOrder', 'Sort Order'));
            $fields->addFieldToTab('Root.Main', TextField::create('PLTitle', 'Title'));
            $fields->addFieldToTab('Root.Main', TextField::create('PLDesc', 'Description'));
            $fields->addFieldToTab('Root.Main', $upload = UploadField::create('PLImg','Image'));

            $fields->removeByName('RetailElectricitySupplyPageID');
            $fields->removeByName('SortOrder');

            # SET FIELD DESCRIPTION 
            $upload->setDescription('Max file size: 1MB | Dimension: At Least 700px x 550px');
            $upload->setFolderName('business/retail/partners');

            return $fields;
        }
    }
}
