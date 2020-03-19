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

    class ContactList extends DataObject {

        private static $db = [
            'SortOrder' => 'Int',
            'CLNumber' => 'Text',
        ];

        private static $has_one = [
            'ContactPage' => 'ContactPage',
        ];

        private static $owns = [

        ];

        private static $summary_fields = [
            'SortOrder' => 'Sort Order',
            'CLNumber' => 'Title',
        ];

        public function getCMSFields() {
            $fields = parent::getCMSFields();
            $fields->addFieldToTab('Root.Main', ReadonlyField::create('SortOrder', 'Sort Order'));
            $fields->addFieldToTab('Root.Main', TextField::create('CLNumber', 'Number'));

            $fields->removeByName('ContactPageID');
            $fields->removeByName('SortOrder');

            return $fields;
        }
    }
}
