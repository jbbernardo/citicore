<?php

namespace {
    use SilverStripe\CMS\Model\SiteTree;
    use SilverStripe\ORM\DataObject;
    use SilverStripe\Assets\Image;
    use SilverStripe\Forms\FieldList;
    use SilverStripe\Forms\TextField;
    use SilverStripe\Forms\ReadonlyField;
    use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
    use SilverStripe\AssetAdmin\Forms\UploadField;
    use SilverStripe\Versioned\Versioned;
    use SilverStripe\Control\Controller;

    class Inquiry extends DataObject {

        private static $db = [
            'SortOrder' => 'Int',
            'clientName' => 'Text',
            'clientEmail' => 'Text',
            'clientMessage' => 'Text',
        ];

        private static $has_one = [
            
        ];

        private static $summary_fields = [
            'SortOrder' => 'Sort Order',
            'clientEmail' => 'Email Address',
        ];

        public function getCMSFields() {
            $fields = parent::getCMSFields();
            $fields->addFieldToTab('Root.Main', ReadonlyField::create('SortOrder', 'Sort Order'));
            $fields->addFieldToTab('Root.Main', new ReadonlyField('clientName', 'Client Name'));
            $fields->addFieldToTab('Root.Main', new ReadonlyField('clientEmail', 'Client Email'));
            $fields->addFieldToTab('Root.Main', new ReadonlyField('clientMessage', 'Client Message'));

            $fields->removeByName('SortOrder');

            return $fields;
        }
    }
}
