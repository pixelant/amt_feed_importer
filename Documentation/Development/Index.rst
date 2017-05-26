.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../Includes.txt

.. _development:

Development
===========

.. _development-hooks:

Hooks
-----

There is possibility to extend functionality of this importer using prepared hooks. RSS2 and Atom import jobs have different hooks but they do the same thing.

|

Hooks for extra mapping feed tags:

::

    $GLOBALS['TYPO3_CONF_VARS']['EXT']['amt_feed_importer']['Job/AtomImportJob.php']['extraMapping']
    $GLOBALS['TYPO3_CONF_VARS']['EXT']['amt_feed_importer']['Job/RSS2ImportJob.php']['extraMapping']


Hooks for processing data after record save (helpful to get image from feed and for news translation):

::

    $GLOBALS['TYPO3_CONF_VARS']['EXT']['amt_feed_importer']['Job/AtomImportJob.php']['processAfterSaved']
    $GLOBALS['TYPO3_CONF_VARS']['EXT']['amt_feed_importer']['Job/RSS2ImportJob.php']['processAfterSaved']