<?php

namespace {
	use SilverStripe\CMS\Model\SiteTree;

	use Page;  
	use PageController;

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

	use SilverStripe\ORM\PaginatedList;
	use SilverStripe\ORM\DataObject;
	use SilverStripe\ORM\ArrayList;
	use SilverStripe\ORM\GroupedList;

	use SilverStripe\View\Requirements;
	use SilverStripe\View\ArrayData;

	use SilverStripe\Control\HTTPRequest;

	class RetailElectricitySupplyPage extends Page {

		private static $db = [
		
			/*Frame 1*/
			'Fr1FrameTitle' => 'Text',
			'Fr1FrameDesc' => 'Text',

			/*Frame 2*/
			'Fr2FrameTitle' => 'Text',

			'Fr2Box1Prefix' => 'Text',
			'Fr2Box1Title' => 'Text',
			'Fr2Box1Desc' => 'Text',

			'Fr2Box2Prefix' => 'Text',
			'Fr2Box2Title' => 'Text',
			'Fr2Box2Desc' => 'Text',

			'Fr2Box3Prefix' => 'Text',
			'Fr2Box3Title' => 'Text',
			'Fr2Box31Desc' => 'Text',

			'Fr2CntctTitle' => 'Text',
			'Fr2CntctPerson' => 'Text',
			'Fr2CntctNumber' => 'Text',
			'Fr2CntctEmail' => 'Text',

			/*Frame 3*/
			'Fr3FrameTitle' => 'Text',
			'Fr3FrameSubTitle' => 'Text',
			'Fr3FrameDesc' => 'Text',

		];

		private static $has_one = [
			'Fr1Img' => Image::class,
			'Fr2BG' => Image::class,
			'Fr3BG' => Image::class,
		];

		private static $has_many = [
			'PartnerLists' => PartnerList::class,
		];

		private static $owns = [
			'Fr1Img',
			'Fr2BG',
			'Fr3BG',
		];

		private static $allowed_children = "none";

		private static $defaults = array(
			'PageName' => 'Retail Electricity Supply',
			'MenuTitle' => 'Retail Electricity Supply',
			'ShowInMenus' => true,
			'ShowInSearch' => true,
		);

		public function getCMSFields() {
			$fields = parent::getCMSFields();

			/*
			|-----------------------------------------------
			| @Frame 1
			|----------------------------------------------- */
			$fields->addFieldToTab('Root.Frame1', new TabSet('Frame1Sets',
				new Tab('Text',
					TextField::create('Fr1FrameTitle', 'Title'),
					TextareaField::create('Fr1FrameDesc', 'Description')
				),
				new Tab('Image',
					$uploadf1 = UploadField::create('Fr1Img','Image')
				)
			));

			/*
			|-----------------------------------------------
			| @Frame 2
			|----------------------------------------------- */
			$fields->addFieldToTab('Root.Frame2', new TabSet('Frame2Sets',
				new Tab('Text',
					TextField::create('Fr2FrameTitle', 'Title')
				),
				new Tab('Box1',
					TextField::create('Fr2Box1Prefix', 'Prefix'),
					TextField::create('Fr2Box1Title', 'Title'),
					TextField::create('Fr2Box1Desc', 'Desc')
				),
				new Tab('Box2',
					TextField::create('Fr2Box2Prefix', 'Prefix'),
					TextField::create('Fr2Box2Title', 'Title'),
					TextField::create('Fr2Box2Desc', 'Desc')
				),
				new Tab('Box3',
					TextField::create('Fr2Box3Prefix', 'Prefix'),
					TextField::create('Fr2Box3Title', 'Title'),
					TextField::create('Fr2Box3Desc', 'Desc')
				),
				new Tab('Contact',
					TextField::create('Fr2CntctTitle', 'Title'),
					TextField::create('Fr2CntctPerson', 'Name'),
					TextField::create('Fr2CntctNumber', 'Number'),
					TextField::create('Fr2CntctEmail', 'Email')
				),
				new Tab('Image',
					$uploadf2 = UploadField::create('Fr2BG','Background Image')
				)
			));

			/*
			|-----------------------------------------------
			| @Frame 3
			|----------------------------------------------- */
			$fields->addFieldToTab('Root.Frame3', new TabSet('Frame3Sets',
				new Tab('Text',
					TextField::create('Fr3FrameSubTitle', 'SubTitle'),
					TextField::create('Fr3FrameTitle', 'Title'),
					TextareaField::create('Fr3FrameDesc', 'Description')
				),
				new Tab('Image',
					$uploadf3 = UploadField::create('Fr3BG','Background Image')
				),
				new Tab('List',
					GridField::create('PartnerLists', 'Partner Lists', 
						$this->PartnerLists(), 
					GridFieldConfig_RecordEditor::create(10)
					->addComponent(new GridFieldSortableRows('SortOrder'))
					)
				)
			));

			#Remove by tab
			$fields->removeFieldFromTab('Root.Main', 'Content');

			# SET FIELD DESCRIPTION 
			$uploadf1->setDescription('Max file size: 1MB | Dimension: At Least 300px x 150px');
			$uploadf2->setDescription('Max file size: 1MB | Dimension: At Least 1300px x 700px');
			$uploadf3->setDescription('Max file size: 1MB | Dimension: At Least 1300px x 500px');
			
			
			# Set destination path for the uploaded images.
			$uploadf1->setFolderName('business/retail');
			$uploadf2->setFolderName('business/retail');
			$uploadf3->setFolderName('business/retail');

			

			return $fields;
		}
	}

	class RetailElectricitySupplyPageController extends PageController {
		
	}
}
