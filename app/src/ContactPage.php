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

	class ContactPage extends Page {

		private static $db = [
		
			/*Frame 1*/
			'Fr1FrameTitle' => 'Text',
			'Fr1FrameDesc' => 'Text',
			'Fr1FrameLabel' => 'Text',
			'Fr1FrameAddr' => 'Text',
			'Fr1FrameAddrTo' => 'Text',
			'Fr1FrameEmail' => 'Text',

			/*Frame 1*/
			'Fr2FrameTitle' => 'Text',
			'Fr2FrameSubTitle' => 'Text',

			'EmailRecipient' => 'Text',

		];

		private static $has_one = [
			'Fr1BG' => Image::class,
			'Fr1Img1' => Image::class,
			'Fr1Img2' => Image::class,
			'Fr1Img3' => Image::class,
		];

		private static $has_many = [
			'ContactLists' => ContactList::class,
		];

		private static $owns = [
			'Fr1BG',
			'Fr1Img1',
			'Fr1Img2',
			'Fr1Img3',
		];

		private static $allowed_children = "none";

		private static $defaults = array(
			'PageName' => 'Contact Page',
			'MenuTitle' => 'Contact Page',
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
					TextareaField::create('Fr1FrameDesc', 'Description'),
					TextField::create('Fr1FrameLabel', 'Sub Title')
				),
				new Tab('Address',
					TextField::create('Fr1FrameAddr', 'Address'),
					TextField::create('Fr1FrameAddrTo', 'Address Link'),
					$uploadf1_1 = UploadField::create('Fr1Img1','Icon')
				),
				new Tab('Contact',
					$uploadf1_2 = UploadField::create('Fr1Img2','Icon')	,
					GridField::create('ContactLists', 'Number List', 
						$this->ContactLists(), 
					GridFieldConfig_RecordEditor::create(10)
					->addComponent(new GridFieldSortableRows('SortOrder'))
					)
				),
				new Tab('Email',
					TextField::create('Fr1FrameEmail', 'Email'),
					$uploadf1_3 = UploadField::create('Fr1Img3','Icon')
				),
				new Tab('Image',
					$uploadf1 = UploadField::create('Fr1BG','Background Image')
				)
			));

			/*
			|-----------------------------------------------
			| @Frame 2
			|----------------------------------------------- */
			$fields->addFieldToTab('Root.Frame2', new TabSet('Frame2Sets',
				new Tab('Text',
					TextField::create('Fr2FrameSubTitle', 'Sub Title'),
					TextField::create('Fr2FrameTitle', 'Title')
				)
			));

			/*
			|-----------------------------------------------
			| @Email Recipient
			|----------------------------------------------- */
			$fields->addFieldsToTab('Root.Recipient', array(
				new TextField('EmailRecipient', 'Email Recipient'),
			));

			#Remove by tab
			$fields->removeFieldFromTab('Root.Main', 'Content');

			# SET FIELD DESCRIPTION 
			$uploadf1->setDescription('Max file size: 1MB | Dimension: At Least 1300px x 600px');
			$uploadf1_1->setDescription('Max file size: 1MB | Dimension: At Least 15px x 15px');
			$uploadf1_2->setDescription('Max file size: 1MB | Dimension: At Least 15px x 15px');
			$uploadf1_3->setDescription('Max file size: 1MB | Dimension: At Least 15px x 15px');
			
			
			# Set destination path for the uploaded images.
			$uploadf1->setFolderName('contact/');
			$uploadf1_1->setFolderName('contact/');
			$uploadf1_2->setFolderName('contact/');
			$uploadf1_3->setFolderName('contact/');
			

			return $fields;
		}
	}

	class ContactPageController extends PageController {
		
	}
}
