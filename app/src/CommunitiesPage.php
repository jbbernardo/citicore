<?php

namespace {
	use SilverStripe\CMS\Model\SiteTree;

	// use Page;  
	// use PageController;

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

	class CommunitiesPage extends Page {

		private static $db = [
		
			'Fr1Title' => 'Text',
			'Fr1Desc' => 'HTMLText',

			'Fr2Title' => 'Text',
			'Fr2Desc' => 'HTMLText',	

		];

		private static $has_one = [
			'Fr1Bg' => Image::class, 
			'Fr1Img' => Image::class,
		];

		private static $has_many = [
			
		];

		private static $owns = [
			'Fr1Bg',
			'Fr1Img',
		];

		private static $allowed_children = "none";

		private static $defaults = array(
			'PageName' => 'Communities Page',
			'MenuTitle' => 'Communities Center',
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
				new Tab('General',
					TextField::create('Fr1Title', 'Title'),
					HTMLEditorField::create('Fr1Desc', 'Description'),
					$uploadf1 = UploadField::create('Fr1Bg','Background Image'),
					$uploadf2 = UploadField::create('Fr1Img','Rounded Image')
				)
			));

			/*
			|-----------------------------------------------
			| @Frame 1
			|----------------------------------------------- */
		
			$fields->addFieldToTab('Root.Frame2', new TabSet('Frame2Sets',
				new Tab('General',
					TextField::create('Fr2Title', 'Title'),
					HTMLEditorField::create('Fr2Desc', 'Description')
				)
			));





			#Remove by tab
			$fields->removeFieldFromTab('Root.Main', 'Content');


			# SET FIELD DESCRIPTION 
			
			
			# Set destination path for the uploaded images.
			

			return $fields;
		}
	}

	class CommunitiesPageController extends PageController {
		
		public function init() {
			parent::init();
			
		}
	}
}
