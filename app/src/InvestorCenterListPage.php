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

	class InvestorCenterListPage extends Page {

		private static $db = [
		
			'ArticleTitle' => 'Text',
			'ArticleYear' => 'Date',

		];

		private static $has_one = [

			'ArticleImage' => Image::class,

		];

		private static $has_many = [
			
		];

		private static $owns = [

			'ArticleImage'

		];

		private static $allowed_children = "none";

		private static $defaults = array(
			'PageName' => 'Investor Center List Page',
			'MenuTitle' => 'Investor Center List',
			'ShowInMenus' => true,
			'ShowInSearch' => true,
		);

		public function getCMSFields() {
			$fields = parent::getCMSFields();

			/*
			|-----------------------------------------------
			| @Article
			|----------------------------------------------- */
			$fields->addFieldToTab('Root.Article', new TabSet('ArticleSets',
				new Tab('Text',
					TextField::create('ArticleTitle', 'Article Title'),
					new DateField('ArticleYear', 'Date')
				),
				new Tab('Image',
					$uploadf1 = UploadField::create('ArticleImage','Article Banner Image')
				)
			));


			#Remove by tab
			$fields->removeFieldFromTab('Root.Main', 'Content');


			# SET FIELD DESCRIPTION 
			$uploadf1->setDescription('Max file size: 2MB | Dimension: At Least 300px x 170px');
			
			
			# Set destination path for the uploaded images.
			$uploadf1->setFolderName('investorCenter/view/article');

			return $fields;
		}
	}

	class InvestorCenterListPageController extends PageController {
		
	}
}
