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

    class ProjectList extends DataObject {

        private static $db = [
            'SortOrder' => 'Int',
            'PrjTitle' => 'Text',
            'PrjDesc' => 'Text',

            'PrjFTLocTitle' => 'Text',
            'PrjFTLocDesc' => 'Text',

            'PrjFTSerTitle' => 'Text',
            'PrjFTSerDesc' => 'Text',

            'PrjFTCapTitle' => 'Text',
            'PrjFTCapDesc' => 'Text',

            'PrjFTGFATitle' => 'Text',
            'PrjFTGFADesc' => 'Text',

            'PrjFTSrcTitle' => 'Text',
            'PrjFTSrcDesc' => 'Text',

            'PrjFTAreTitle' => 'Text',
            'PrjFTAreDesc' => 'Text',

            'PrjFTConTitle' => 'Text',
            'PrjFTConPerson' => 'Text',
            'PrjFTConNumber' => 'Text',
        ];

        private static $has_one = [
            'ProjectPage' => 'ProjectPage',
            'PrjImg' => Image::class,

            'PrjFTLocImg' => Image::class,
            'PrjFTSerImg' => Image::class,
            'PrjFTCapImg' => Image::class,
            'PrjFTGFAImg' => Image::class,
            'PrjFTSrcImg' => Image::class,
            'PrjFTAreImg' => Image::class,
            'PrjFTConImg' => Image::class,
        ];

        private static $owns = [
            'PrjImg',

            'PrjFTLocImg',
            'PrjFTSerImg',
            'PrjFTCapImg',
            'PrjFTGFAImg',
            'PrjFTSrcImg',
            'PrjFTAreImg',
            'PrjFTConImg',
        ];

        private static $summary_fields = [
            'SortOrder' => 'Sort Order',
            'PrjTitle' => 'Project',
        ];

        public function getCMSFields() {
            $fields = parent::getCMSFields();
            $fields->addFieldToTab('Root.Main', ReadonlyField::create('SortOrder', 'Sort Order'));
            $fields->addFieldToTab('Root.Main', TextField::create('PrjTitle', 'Project Name'));
            $fields->addFieldToTab('Root.Main', TextareaField::create('PrjDesc', 'Project Description'));
            $fields->addFieldToTab('Root.Main', $upload = UploadField::create('PrjImg','Project Image'));

            /*
            |-----------------------------------------------
            | @Project Features
            |----------------------------------------------- */
            $fields->addFieldToTab('Root.Location', $labelf1 = TextField::create('PrjFTLocTitle', 'Title'));
            $fields->addFieldToTab('Root.Location', TextareaField::create('PrjFTLocDesc', 'Description'));
            $fields->addFieldToTab('Root.Location', $uploadf1 = UploadField::create('PrjFTLocImg','Icon'));

            $fields->addFieldToTab('Root.Services', $labelf2 = TextField::create('PrjFTSerTitle', 'Title'));
            $fields->addFieldToTab('Root.Services', TextareaField::create('PrjFTSerDesc', 'Description'));
            $fields->addFieldToTab('Root.Services', $uploadf2 = UploadField::create('PrjFTSerImg','Icon'));

            $fields->addFieldToTab('Root.Capacity', $labelf3 = TextField::create('PrjFTCapTitle', 'Title'));
            $fields->addFieldToTab('Root.Capacity', TextareaField::create('PrjFTCapDesc', 'Description'));
            $fields->addFieldToTab('Root.Capacity', $uploadf3 = UploadField::create('PrjFTCapImg','Icon'));

            $fields->addFieldToTab('Root.GFA', $labelf4 = TextField::create('PrjFTGFATitle', 'Title'));
            $fields->addFieldToTab('Root.GFA', TextareaField::create('PrjFTGFADesc', 'Description'));
            $fields->addFieldToTab('Root.GFA', $uploadf4 = UploadField::create('PrjFTGFAImg','Icon'));

            $fields->addFieldToTab('Root.Source', $labelf5 = TextField::create('PrjFTSrcTitle', 'Title'));
            $fields->addFieldToTab('Root.Source', TextareaField::create('PrjFTSrcDesc', 'Description'));
            $fields->addFieldToTab('Root.Source', $uploadf5 = UploadField::create('PrjFTSrcImg','Icon'));

            $fields->addFieldToTab('Root.Area', $labelf7 = TextField::create('PrjFTAreTitle', 'Title'));
            $fields->addFieldToTab('Root.Area', TextareaField::create('PrjFTAreDesc', 'Description'));
            $fields->addFieldToTab('Root.Area', $uploadf7 = UploadField::create('PrjFTAreImg','Icon'));

            $fields->addFieldToTab('Root.Contact', $labelf6 = TextField::create('PrjFTConTitle', 'Title'));
            $fields->addFieldToTab('Root.Contact', TextField::create('PrjFTConPerson', 'Person'));
            $fields->addFieldToTab('Root.Contact', TextField::create('PrjFTConNumber', 'Number'));
            $fields->addFieldToTab('Root.Contact', $uploadf6 = UploadField::create('PrjFTConImg','Icon'));



            $fields->removeByName('ProjectPageID');
            $fields->removeByName('SortOrder');

            # SET FIELD DESCRIPTION 
            $labelf1->setDescription('Title is "Location" by default');
            $labelf2->setDescription('Title is "Services" by default');
            $labelf3->setDescription('Title is "Capacity" by default');
            $labelf4->setDescription('Title is "GFA" by default');
            $labelf5->setDescription('Title is "Source" by default');
            $labelf6->setDescription('Title is "Contact" by default');
            $labelf7->setDescription('Title is "Areas to be Powered" by default');


            $upload->setDescription('Max file size: 1MB | Dimension: At Least 60px x 460px');

            $uploadf1->setDescription('Already have an icon by default || Max file size: 1MB | Dimension: At Least 25px x 25px');
            $uploadf2->setDescription('Already have an icon by default || Max file size: 1MB | Dimension: At Least 25px x 25px');
            $uploadf3->setDescription('Already have an icon by default || Max file size: 1MB | Dimension: At Least 25px x 25px');
            $uploadf4->setDescription('Already have an icon by default || Max file size: 1MB | Dimension: At Least 25px x 25px');
            $uploadf5->setDescription('Already have an icon by default || Max file size: 1MB | Dimension: At Least 25px x 25px');
            $uploadf6->setDescription('Already have an icon by default || Max file size: 1MB | Dimension: At Least 25px x 25px');
            $uploadf7->setDescription('Already have an icon by default || Max file size: 1MB | Dimension: At Least 25px x 25px');

            $upload->setFolderName('projectPage/list');

            $uploadf1->setFolderName('projectPage/icon');
            $uploadf2->setFolderName('projectPage/icon');
            $uploadf3->setFolderName('projectPage/icon');
            $uploadf4->setFolderName('projectPage/icon');
            $uploadf5->setFolderName('projectPage/icon');
            $uploadf6->setFolderName('projectPage/icon');
            $uploadf7->setFolderName('projectPage/icon');

            return $fields;
        }
    }
}
