<?php

namespace LuminFire\LaravelFmErrorHelper;

class FMError
{
    /**
     * FileMaker to HTTP status code mapping.
     *
     * @since 1.0.0
     *
     * @var array $fmErrorCodes
     */
    public static $fmErrorCodes = array(
        -1 => [
            'filemaker' => -1,
            'http' => 500,
            'message' => 'Unknown error',
        ],
        0 => [
            'filemaker' => 0,
            'http' => 200,
            'message' => 'No error',
        ],
        1 => [
            'filemaker' => 1,
            'http' => 408,
            'message' => 'User canceled action',
        ],
        2 => [
            'filemaker' => 2,
            'http' => 500,
            'message' => 'Memory error',
        ],
        3 => [
            'filemaker' => 3,
            'http' => 400,
            'message' => 'Command is unavailable (for example, wrong operating system or mode)',
        ],
        4 => [
            'filemaker' => 4,
            'http' => 501,
            'message' => 'Command is unknown',
        ],
        5 => [
            'filemaker' => 5,
            'http' => 500,
            'message' => 'Command is invalid (for example, a Set Field script step does not have a calculation specified)',
        ],
        6 => [
            'filemaker' => 6,
            'http' => 500,
            'message' => 'File is read-only',
        ],
        7 => [
            'filemaker' => 7,
            'http' => 500,
            'message' => 'Running out of memory',
        ],
        8 => [
            'filemaker' => 8,
            'http' => 404,
            'message' => 'Empty result',
        ],
        9 => [
            'filemaker' => 9,
            'http' => 403,
            'message' => 'Insufficient privileges',
        ],
        10 => [
            'filemaker' => 10,
            'http' => 404,
            'message' => 'Requested data is missing',
        ],
        11 => [
            'filemaker' => 11,
            'http' => 500,
            'message' => 'Name is not valid',
        ],
        12 => [
            'filemaker' => 12,
            'http' => 500,
            'message' => 'Name already exists',
        ],
        13 => [
            'filemaker' => 13,
            'http' => 500,
            'message' => 'File or object is in use',
        ],
        14 => [
            'filemaker' => 14,
            'http' => 416,
            'message' => 'Out of range',
        ],
        15 => [
            'filemaker' => 15,
            'http' => 400,
            'message' => 'Can\'t divide by zero',
        ],
        16 => [
            'filemaker' => 16,
            'http' => 400,
            'message' => 'Operation failed; request retry (for example, a user query)',
        ],
        17 => [
            'filemaker' => 17,
            'http' => 500,
            'message' => 'Attempt to convert foreign character set to UTF-16 failed',
        ],
        18 => [
            'filemaker' => 18,
            'http' => 400,
            'message' => 'Client must provide account information to proceed',
        ],
        19 => [
            'filemaker' => 19,
            'http' => 400,
            'message' => 'String contains characters other than A-Z, a-z, 0-9 (ASCII)',
        ],
        20 => [
            'filemaker' => 20,
            'http' => 500,
            'message' => 'Command/operation canceled by triggered script',
        ],
        21 => [
            'filemaker' => 21,
            'http' => 501,
            'message' => 'Request not supported (for example, when creating a hard link on a file system that does not support hard links)',
        ],
        100 => [
            'filemaker' => 100,
            'http' => 400,
            'message' => 'File is missing',
        ],
        101 => [
            'filemaker' => 101,
            'http' => 400,
            'message' => 'Record is missing',
        ],
        102 => [
            'filemaker' => 102,
            'http' => 400,
            'message' => 'Field is missing',
        ],
        103 => [
            'filemaker' => 103,
            'http' => 400,
            'message' => 'Relationship is missing',
        ],
        104 => [
            'filemaker' => 104,
            'http' => 400,
            'message' => 'Script is missing',
        ],
        105 => [
            'filemaker' => 105,
            'http' => 400,
            'message' => 'Layout is missing',
        ],
        106 => [
            'filemaker' => 106,
            'http' => 400,
            'message' => 'Table is missing',
        ],
        107 => [
            'filemaker' => 107,
            'http' => 500,
            'message' => 'Index is missing',
        ],
        108 => [
            'filemaker' => 108,
            'http' => 500,
            'message' => 'Value list is missing',
        ],
        109 => [
            'filemaker' => 109,
            'http' => 500,
            'message' => 'Privilege set is missing',
        ],
        110 => [
            'filemaker' => 110,
            'http' => 500,
            'message' => 'Related tables are missing',
        ],
        111 => [
            'filemaker' => 111,
            'http' => 400,
            'message' => 'Field repetition is invalid',
        ],
        112 => [
            'filemaker' => 112,
            'http' => 500,
            'message' => 'Window is missing',
        ],
        113 => [
            'filemaker' => 113,
            'http' => 500,
            'message' => 'Function is missing',
        ],
        114 => [
            'filemaker' => 114,
            'http' => 500,
            'message' => 'File reference is missing',
        ],
        115 => [
            'filemaker' => 115,
            'http' => 500,
            'message' => 'Menu set is missing',
        ],
        116 => [
            'filemaker' => 116,
            'http' => 500,
            'message' => 'Layout object is missing',
        ],
        117 => [
            'filemaker' => 117,
            'http' => 500,
            'message' => 'Data source is missing',
        ],
        118 => [
            'filemaker' => 118,
            'http' => 500,
            'message' => 'Theme is missing',
        ],
        130 => [
            'filemaker' => 130,
            'http' => 500,
            'message' => 'Files are damaged or missing and must be reinstalled',
        ],
        131 => [
            'filemaker' => 131,
            'http' => 500,
            'message' => 'Language pack files are missing',
        ],
        200 => [
            'filemaker' => 200,
            'http' => 403,
            'message' => 'Record access is denied',
        ],
        201 => [
            'filemaker' => 201,
            'http' => 500,
            'message' => 'Field cannot be modified',
        ],
        202 => [
            'filemaker' => 202,
            'http' => 403,
            'message' => 'Field access is denied',
        ],
        203 => [
            'filemaker' => 203,
            'http' => 500,
            'message' => 'No records in file to print, or password doesn\'t allow print access',
        ],
        204 => [
            'filemaker' => 204,
            'http' => 403,
            'message' => 'No access to field(s) in sort order',
        ],
        205 => [
            'filemaker' => 205,
            'http' => 403,
            'message' => 'User does not have access privileges to create new records; import will overwrite existing data',
        ],
        206 => [
            'filemaker' => 206,
            'http' => 403,
            'message' => 'User does not have password change privileges, or file is not modifiable',
        ],
        207 => [
            'filemaker' => 207,
            'http' => 403,
            'message' => 'User does not have privileges to change database schema, or file is not modifiable',
        ],
        208 => [
            'filemaker' => 208,
            'http' => 400,
            'message' => 'Password does not contain enough characters',
        ],
        209 => [
            'filemaker' => 209,
            'http' => 400,
            'message' => 'New password must be different from existing one',
        ],
        210 => [
            'filemaker' => 210,
            'http' => 401,
            'message' => 'User account is inactive',
        ],
        211 => [
            'filemaker' => 211,
            'http' => 401,
            'message' => 'Password has expired ',
        ],
        212 => [
            'filemaker' => 212,
            'http' => 401,
            'message' => 'Invalid user account and/or password; please try again',
        ],
        214 => [
            'filemaker' => 214,
            'http' => 429,
            'message' => 'Too many login attempts',
        ],
        215 => [
            'filemaker' => 215,
            'http' => 403,
            'message' => 'Administrator privileges cannot be duplicated',
        ],
        216 => [
            'filemaker' => 216,
            'http' => 403,
            'message' => 'Guest account cannot be duplicated',
        ],
        217 => [
            'filemaker' => 217,
            'http' => 403,
            'message' => 'User does not have sufficient privileges to modify administrator account',
        ],
        218 => [
            'filemaker' => 218,
            'http' => 400,
            'message' => 'Password and verify password do not match',
        ],
        219 => [
            'filemaker' => 219,
            'http' => 403,
            'message' => 'Cannot open file; must be licensed user; contact team manager',
        ],
        300 => [
            'filemaker' => 300,
            'http' => 423,
            'message' => 'File is locked or in use',
        ],
        301 => [
            'filemaker' => 301,
            'http' => 423,
            'message' => 'Record is in use by another user',
        ],
        302 => [
            'filemaker' => 302,
            'http' => 423,
            'message' => 'Table is in use by another user',
        ],
        303 => [
            'filemaker' => 303,
            'http' => 423,
            'message' => 'Database schema is in use by another user',
        ],
        304 => [
            'filemaker' => 304,
            'http' => 423,
            'message' => 'Layout is in use by another user',
        ],
        306 => [
            'filemaker' => 306,
            'http' => 400,
            'message' => 'Record modification ID does not match',
        ],
        307 => [
            'filemaker' => 307,
            'http' => 400,
            'message' => 'Transaction could not be locked because of a communication error with the host',
        ],
        308 => [
            'filemaker' => 308,
            'http' => 423,
            'message' => 'Theme is locked and in use by another user',
        ],
        400 => [
            'filemaker' => 400,
            'http' => 400,
            'message' => 'Find criteria are empty',
        ],
        401 => [
            'filemaker' => 401,
            'http' => 404,
            'message' => 'No records match the request',
        ],
        402 => [
            'filemaker' => 402,
            'http' => 400,
            'message' => 'Selected field is not a match field for a lookup',
        ],
        404 => [
            'filemaker' => 404,
            'http' => 400,
            'message' => 'Sort order is invalid',
        ],
        405 => [
            'filemaker' => 405,
            'http' => 400,
            'message' => 'Number of records specified exceeds number of records that can be omitted',
        ],
        406 => [
            'filemaker' => 406,
            'http' => 400,
            'message' => 'Replace/reserialize criteria are invalid',
        ],
        407 => [
            'filemaker' => 407,
            'http' => 400,
            'message' => 'One or both match fields are missing (invalid relationship)',
        ],
        408 => [
            'filemaker' => 408,
            'http' => 400,
            'message' => 'Specified field has inappropriate data type for this operation',
        ],
        409 => [
            'filemaker' => 409,
            'http' => 400,
            'message' => 'Import order is invalid',
        ],
        410 => [
            'filemaker' => 410,
            'http' => 400,
            'message' => 'Export order is invalid',
        ],
        412 => [
            'filemaker' => 412,
            'http' => 500,
            'message' => 'Wrong version of FileMaker Pro Advanced used to recover file',
        ],
        413 => [
            'filemaker' => 413,
            'http' => 400,
            'message' => 'Specified field has inappropriate field type',
        ],
        414 => [
            'filemaker' => 414,
            'http' => 400,
            'message' => 'Layout cannot display the result',
        ],
        415 => [
            'filemaker' => 415,
            'http' => 400,
            'message' => 'One or more required related records are not available',
        ],
        416 => [
            'filemaker' => 416,
            'http' => 400,
            'message' => 'A primary key is required from the data source table',
        ],
        417 => [
            'filemaker' => 417,
            'http' => 400,
            'message' => 'File is not a supported data source',
        ],
        418 => [
            'filemaker' => 418,
            'http' => 500,
            'message' => 'Internal failure in INSERT operation into a field',
        ],
        500 => [
            'filemaker' => 500,
            'http' => 400,
            'message' => 'Date value does not meet validation entry options',
        ],
        501 => [
            'filemaker' => 501,
            'http' => 400,
            'message' => 'Time value does not meet validation entry options',
        ],
        502 => [
            'filemaker' => 502,
            'http' => 400,
            'message' => 'Number value does not meet validation entry options',
        ],
        503 => [
            'filemaker' => 503,
            'http' => 400,
            'message' => 'Value in field is not within the range specified in validation entry options',
        ],
        504 => [
            'filemaker' => 504,
            'http' => 400,
            'message' => 'Value in field is not unique, as required in validation entry options',
        ],
        505 => [
            'filemaker' => 505,
            'http' => 400,
            'message' => 'Value in field is not an existing value in the file, as required in validation entry options',
        ],
        506 => [
            'filemaker' => 506,
            'http' => 400,
            'message' => 'Value in field is not listed in the value list specified in validation entry option',
        ],
        507 => [
            'filemaker' => 507,
            'http' => 400,
            'message' => 'Value in field failed calculation test of validation entry option',
        ],
        508 => [
            'filemaker' => 508,
            'http' => 400,
            'message' => 'Invalid value entered in Find mode',
        ],
        509 => [
            'filemaker' => 509,
            'http' => 400,
            'message' => 'Field requires a valid value',
        ],
        510 => [
            'filemaker' => 510,
            'http' => 404,
            'message' => 'Related value is empty or unavailable',
        ],
        511 => [
            'filemaker' => 511,
            'http' => 507,
            'message' => 'Value in field exceeds maximum field size',
        ],
        512 => [
            'filemaker' => 512,
            'http' => 409,
            'message' => 'Record was already modified by another user',
        ],
        513 => [
            'filemaker' => 513,
            'http' => 507,
            'message' => 'No validation was specified but data cannot fit into the field',
        ],
        600 => [
            'filemaker' => 600,
            'http' => 400,
            'message' => 'Print error has occurred',
        ],
        601 => [
            'filemaker' => 601,
            'http' => 413,
            'message' => 'Combined header and footer exceed one page',
        ],
        602 => [
            'filemaker' => 602,
            'http' => 413,
            'message' => 'Body doesn\'t fit on a page for current column setup',
        ],
        603 => [
            'filemaker' => 603,
            'http' => 504,
            'message' => 'Print connection lost',
        ],
        700 => [
            'filemaker' => 700,
            'http' => 400,
            'message' => 'File is of the wrong file type for import',
        ],
        706 => [
            'filemaker' => 706,
            'http' => 400,
            'message' => 'EPS file has no preview image',
        ],
        707 => [
            'filemaker' => 707,
            'http' => 400,
            'message' => 'Graphic translator cannot be found',
        ],
        708 => [
            'filemaker' => 708,
            'http' => 501,
            'message' => 'Can\'t import the file, or need color monitor support to import file',
        ],
        711 => [
            'filemaker' => 711,
            'http' => 400,
            'message' => 'Import translator cannot be found',
        ],
        714 => [
            'filemaker' => 714,
            'http' => 403,
            'message' => 'Password privileges do not allow the operation',
        ],
        715 => [
            'filemaker' => 715,
            'http' => 400,
            'message' => 'Specified Excel worksheet or named range is missing',
        ],
        716 => [
            'filemaker' => 716,
            'http' => 403,
            'message' => 'A SQL query using DELETE, INSERT, or UPDATE is not allowed for ODBC import',
        ],
        717 => [
            'filemaker' => 717,
            'http' => 400,
            'message' => 'There is not enough XML/XSL information to proceed with the import or export',
        ],
        718 => [
            'filemaker' => 718,
            'http' => 500,
            'message' => 'Error in parsing XML file (from Xerces)',
        ],
        719 => [
            'filemaker' => 719,
            'http' => 500,
            'message' => 'Error in transforming XML using XSL (from Xalan)',
        ],
        720 => [
            'filemaker' => 720,
            'http' => 500,
            'message' => 'Error when exporting; intended format does not support repeating fields',
        ],
        721 => [
            'filemaker' => 721,
            'http' => 500,
            'message' => 'Unknown error occurred in the parser or the transformer',
        ],
        722 => [
            'filemaker' => 722,
            'http' => 500,
            'message' => 'Cannot import data into a file that has no fields',
        ],
        723 => [
            'filemaker' => 723,
            'http' => 403,
            'message' => 'You do not have permission to add records to or modify records in the target table',
        ],
        724 => [
            'filemaker' => 724,
            'http' => 403,
            'message' => 'You do not have permission to add records to the target table',
        ],
        725 => [
            'filemaker' => 725,
            'http' => 403,
            'message' => 'You do not have permission to modify records in the target table',
        ],
        726 => [
            'filemaker' => 726,
            'http' => 400,
            'message' => 'Source file has more records than the target table; not all records were imported',
        ],
        727 => [
            'filemaker' => 727,
            'http' => 400,
            'message' => 'Target table has more records than the source file; not all records were updated',
        ],
        729 => [
            'filemaker' => 729,
            'http' => 500,
            'message' => 'Errors occurred during import; records could not be imported',
        ],
        730 => [
            'filemaker' => 730,
            'http' => 501,
            'message' => 'Unsupported Excel version; convert file to the current Excel format and try again',
        ],
        731 => [
            'filemaker' => 731,
            'http' => 400,
            'message' => 'File you are importing from contains no data',
        ],
        732 => [
            'filemaker' => 732,
            'http' => 400,
            'message' => 'This file cannot be inserted because it contains other files',
        ],
        733 => [
            'filemaker' => 733,
            'http' => 400,
            'message' => 'A table cannot be imported into itself',
        ],
        734 => [
            'filemaker' => 734,
            'http' => 400,
            'message' => 'This file type cannot be displayed as a picture',
        ],
        735 => [
            'filemaker' => 735,
            'http' => 400,
            'message' => 'This file type cannot be displayed as a picture; it will be inserted and displayed as a file',
        ],
        736 => [
            'filemaker' => 736,
            'http' => 400,
            'message' => 'Too much data to export to this format; data will be truncated',
        ],
        738 => [
            'filemaker' => 738,
            'http' => 409,
            'message' => 'The theme you are importing already exists',
        ],
        800 => [
            'filemaker' => 800,
            'http' => 507,
            'message' => 'Unable to create file on disk',
        ],
        801 => [
            'filemaker' => 801,
            'http' => 507,
            'message' => 'Unable to create temporary file on System disk',
        ],
        802 => [
            'filemaker' => 802,
            'http' => 500,
            'message' => 'Unable to open file',
        ],
        803 => [
            'filemaker' => 803,
            'http' => 500,
            'message' => 'File is single-user, or host cannot be found',
        ],
        804 => [
            'filemaker' => 804,
            'http' => 500,
            'message' => 'File cannot be opened as read-only in its current state',
        ],
        805 => [
            'filemaker' => 805,
            'http' => 500,
            'message' => 'File is damaged; use Recover command',
        ],
        806 => [
            'filemaker' => 806,
            'http' => 500,
            'message' => 'File cannot be opened with this version of a FileMaker client',
        ],
        807 => [
            'filemaker' => 807,
            'http' => 500,
            'message' => 'File is not a FileMaker Pro Advanced file or is severely damaged',
        ],
        808 => [
            'filemaker' => 808,
            'http' => 500,
            'message' => 'Cannot open file because access privileges are damaged',
        ],
        809 => [
            'filemaker' => 809,
            'http' => 507,
            'message' => 'Disk/volume is full',
        ],
        810 => [
            'filemaker' => 810,
            'http' => 500,
            'message' => 'Disk/volume is locked',
        ],
        811 => [
            'filemaker' => 811,
            'http' => 500,
            'message' => 'Temporary file cannot be opened as FileMaker Pro Advanced file',
        ],
        812 => [
            'filemaker' => 812,
            'http' => 429,
            'message' => 'Exceeded host’s capacity',
        ],
        813 => [
            'filemaker' => 813,
            'http' => 500,
            'message' => 'Record synchronization error on network',
        ],
        814 => [
            'filemaker' => 814,
            'http' => 500,
            'message' => 'File(s) cannot be opened because maximum number is open',
        ],
        815 => [
            'filemaker' => 815,
            'http' => 500,
            'message' => 'Couldn’t open lookup file',
        ],
        816 => [
            'filemaker' => 816,
            'http' => 500,
            'message' => 'Unable to convert file',
        ],
        817 => [
            'filemaker' => 817,
            'http' => 500,
            'message' => 'Unable to open file because it does not belong to this solution',
        ],
        819 => [
            'filemaker' => 819,
            'http' => 500,
            'message' => 'Cannot save a local copy of a remote file',
        ],
        820 => [
            'filemaker' => 820,
            'http' => 500,
            'message' => 'File is being closed',
        ],
        821 => [
            'filemaker' => 821,
            'http' => 504,
            'message' => 'Host forced a disconnect',
        ],
        822 => [
            'filemaker' => 822,
            'http' => 500,
            'message' => 'FileMaker Pro Advanced files not found; reinstall missing files',
        ],
        823 => [
            'filemaker' => 823,
            'http' => 500,
            'message' => 'Cannot set file to single-user; guests are connected',
        ],
        824 => [
            'filemaker' => 824,
            'http' => 500,
            'message' => 'File is damaged or not a FileMaker Pro Advanced file',
        ],
        825 => [
            'filemaker' => 825,
            'http' => 403,
            'message' => 'File is not authorized to reference the protected file',
        ],
        826 => [
            'filemaker' => 826,
            'http' => 400,
            'message' => 'File path specified is not a valid file path',
        ],
        827 => [
            'filemaker' => 827,
            'http' => 400,
            'message' => 'File was not created because the source contained no data or is a reference',
        ],
        850 => [
            'filemaker' => 850,
            'http' => 500,
            'message' => 'Path is not valid for the operating system',
        ],
        851 => [
            'filemaker' => 851,
            'http' => 500,
            'message' => 'Cannot delete an external file from disk',
        ],
        852 => [
            'filemaker' => 852,
            'http' => 500,
            'message' => 'Cannot write a file to the external storage',
        ],
        853 => [
            'filemaker' => 853,
            'http' => 500,
            'message' => 'One or more containers failed to transfer',
        ],
        870 => [
            'filemaker' => 870,
            'http' => 409,
            'message' => 'Cannot modify file because another user is modifying it',
        ],
        900 => [
            'filemaker' => 900,
            'http' => 500,
            'message' => 'General spelling engine error',
        ],
        901 => [
            'filemaker' => 901,
            'http' => 500,
            'message' => 'Main spelling dictionary not installed',
        ],
        903 => [
            'filemaker' => 903,
            'http' => 500,
            'message' => 'Command cannot be used in a shared file',
        ],
        905 => [
            'filemaker' => 905,
            'http' => 500,
            'message' => 'Command requires a field to be active',
        ],
        906 => [
            'filemaker' => 906,
            'http' => 500,
            'message' => 'Current file is not shared; command can be used only if the file is shared',
        ],
        920 => [
            'filemaker' => 920,
            'http' => 500,
            'message' => 'Cannot initialize the spelling engine',
        ],
        921 => [
            'filemaker' => 921,
            'http' => 500,
            'message' => 'User dictionary cannot be loaded for editing',
        ],
        922 => [
            'filemaker' => 922,
            'http' => 500,
            'message' => 'User dictionary cannot be found',
        ],
        923 => [
            'filemaker' => 923,
            'http' => 500,
            'message' => 'User dictionary is read-only',
        ],
        951 => [
            'filemaker' => 951,
            'http' => 500,
            'message' => 'An unexpected error occurred (*)',
        ],
        952 => [
            'filemaker' => 952,
            'http' => 401,
            'message' => 'Invalid FileMaker Data API token (*)',
        ],
        953 => [
            'filemaker' => 953,
            'http' => 500,
            'message' => 'Exceeded limit on data the FileMaker Data API can transmit (*)',
        ],
        954 => [
            'filemaker' => 954,
            'http' => 500,
            'message' => 'Unsupported XML grammar (*)',
        ],
        955 => [
            'filemaker' => 955,
            'http' => 500,
            'message' => 'No database name (*)',
        ],
        956 => [
            'filemaker' => 956,
            'http' => 429,
            'message' => 'Maximum number of database sessions exceeded (*)',
        ],
        957 => [
            'filemaker' => 957,
            'http' => 400,
            'message' => 'Conflicting commands (*)',
        ],
        958 => [
            'filemaker' => 958,
            'http' => 400,
            'message' => 'Parameter missing (*)',
        ],
        959 => [
            'filemaker' => 959,
            'http' => 500,
            'message' => 'Custom Web Publishing technology is disabled',
        ],
        960 => [
            'filemaker' => 960,
            'http' => 400,
            'message' => 'Parameter is invalid',
        ],
        1200 => [
            'filemaker' => 1200,
            'http' => 500,
            'message' => 'Generic calculation error',
        ],
        1201 => [
            'filemaker' => 1201,
            'http' => 500,
            'message' => 'Too few parameters in the function',
        ],
        1202 => [
            'filemaker' => 1202,
            'http' => 500,
            'message' => 'Too many parameters in the function',
        ],
        1203 => [
            'filemaker' => 1203,
            'http' => 500,
            'message' => 'Unexpected end of calculation',
        ],
        1204 => [
            'filemaker' => 1204,
            'http' => 500,
            'message' => 'Number, text constant, field name, or "(" expected',
        ],
        1205 => [
            'filemaker' => 1205,
            'http' => 500,
            'message' => 'Comment is not terminated with "*/"',
        ],
        1206 => [
            'filemaker' => 1206,
            'http' => 500,
            'message' => 'Text constant must end with a quotation mark',
        ],
        1207 => [
            'filemaker' => 1207,
            'http' => 500,
            'message' => 'Unbalanced parenthesis',
        ],
        1208 => [
            'filemaker' => 1208,
            'http' => 500,
            'message' => 'Operator missing, function not found, or "(" not expected',
        ],
        1209 => [
            'filemaker' => 1209,
            'http' => 500,
            'message' => 'Name (such as field name or layout name) is missing',
        ],
        1210 => [
            'filemaker' => 1210,
            'http' => 500,
            'message' => 'Plug-in function or script step has already been registered',
        ],
        1211 => [
            'filemaker' => 1211,
            'http' => 500,
            'message' => 'List usage is not allowed in this function',
        ],
        1212 => [
            'filemaker' => 1212,
            'http' => 500,
            'message' => 'An operator (for example, +, -, *) is expected here',
        ],
        1213 => [
            'filemaker' => 1213,
            'http' => 500,
            'message' => 'This variable has already been defined in the Let function',
        ],
        1214 => [
            'filemaker' => 1214,
            'http' => 500,
            'message' => 'Average, Count, Extend, GetRepetition, Max, Min, NPV, StDev, Sum, and GetSummary: expression found where a field alone is needed',
        ],
        1215 => [
            'filemaker' => 1215,
            'http' => 500,
            'message' => 'This parameter is an invalid Get function parameter',
        ],
        1216 => [
            'filemaker' => 1216,
            'http' => 500,
            'message' => 'Only summary fields are allowed as first argument in GetSummary',
        ],
        1217 => [
            'filemaker' => 1217,
            'http' => 500,
            'message' => 'Break field is invalid',
        ],
        1218 => [
            'filemaker' => 1218,
            'http' => 500,
            'message' => 'Cannot evaluate the number',
        ],
        1219 => [
            'filemaker' => 1219,
            'http' => 500,
            'message' => 'A field cannot be used in its own formula',
        ],
        1220 => [
            'filemaker' => 1220,
            'http' => 500,
            'message' => 'Field type must be normal or calculated',
        ],
        1221 => [
            'filemaker' => 1221,
            'http' => 500,
            'message' => 'Data type must be number, date, time, or timestamp',
        ],
        1222 => [
            'filemaker' => 1222,
            'http' => 500,
            'message' => 'Calculation cannot be stored',
        ],
        1223 => [
            'filemaker' => 1223,
            'http' => 501,
            'message' => 'Function referred to is not yet implemented',
        ],
        1224 => [
            'filemaker' => 1224,
            'http' => 501,
            'message' => 'Function referred to does not exist',
        ],
        1225 => [
            'filemaker' => 1225,
            'http' => 500,
            'message' => 'Function referred to is not supported in this context',
        ],
        1300 => [
            'filemaker' => 1300,
            'http' => 500,
            'message' => 'The specified name can\'t be used',
        ],
        1301 => [
            'filemaker' => 1301,
            'http' => 500,
            'message' => 'A parameter of the imported or pasted function has the same name as a function in the file',
        ],
        1400 => [
            'filemaker' => 1400,
            'http' => 504,
            'message' => 'ODBC client driver initialization failed; make sure ODBC client drivers are properly installed',
        ],
        1401 => [
            'filemaker' => 1401,
            'http' => 500,
            'message' => 'Failed to allocate environment (ODBC)',
        ],
        1402 => [
            'filemaker' => 1402,
            'http' => 500,
            'message' => 'Failed to free environment (ODBC)',
        ],
        1403 => [
            'filemaker' => 1403,
            'http' => 500,
            'message' => 'Failed to disconnect (ODBC)',
        ],
        1404 => [
            'filemaker' => 1404,
            'http' => 500,
            'message' => 'Failed to allocate connection (ODBC)',
        ],
        1405 => [
            'filemaker' => 1405,
            'http' => 500,
            'message' => 'Failed to free connection (ODBC)',
        ],
        1406 => [
            'filemaker' => 1406,
            'http' => 500,
            'message' => 'Failed check for SQL API (ODBC)',
        ],
        1407 => [
            'filemaker' => 1407,
            'http' => 500,
            'message' => 'Failed to allocate statement (ODBC)',
        ],
        1408 => [
            'filemaker' => 1408,
            'http' => 500,
            'message' => 'Extended error (ODBC)',
        ],
        1409 => [
            'filemaker' => 1409,
            'http' => 500,
            'message' => 'Error (ODBC)',
        ],
        1413 => [
            'filemaker' => 1413,
            'http' => 500,
            'message' => 'Failed communication link (ODBC)',
        ],
        1414 => [
            'filemaker' => 1414,
            'http' => 500,
            'message' => 'SQL statement is too long',
        ],
        1450 => [
            'filemaker' => 1450,
            'http' => 401,
            'message' => 'Action requires PHP privilege extension (*)',
        ],
        1451 => [
            'filemaker' => 1451,
            'http' => 500,
            'message' => 'Action requires that current file be remote',
        ],
        1501 => [
            'filemaker' => 1501,
            'http' => 401,
            'message' => 'SMTP authentication failed',
        ],
        1502 => [
            'filemaker' => 1502,
            'http' => 401,
            'message' => 'Connection refused by SMTP server',
        ],
        1503 => [
            'filemaker' => 1503,
            'http' => 500,
            'message' => 'Error with SSL',
        ],
        1504 => [
            'filemaker' => 1504,
            'http' => 500,
            'message' => 'SMTP server requires the connection to be encrypted',
        ],
        1505 => [
            'filemaker' => 1505,
            'http' => 500,
            'message' => 'Specified authentication is not supported by SMTP server',
        ],
        1506 => [
            'filemaker' => 1506,
            'http' => 500,
            'message' => 'Email message(s) could not be sent successfully',
        ],
        1507 => [
            'filemaker' => 1507,
            'http' => 500,
            'message' => 'Unable to log in to the SMTP server',
        ],
        1550 => [
            'filemaker' => 1550,
            'http' => 500,
            'message' => 'Cannot load the plug-in, or the plug-in is not a valid plug-in',
        ],
        1551 => [
            'filemaker' => 1551,
            'http' => 500,
            'message' => 'Cannot install the plug-in; cannot delete an existing plug-in or write to the folder or disk',
        ],
        1552 => [
            'filemaker' => 1552,
            'http' => 500,
            'message' => 'Returned by plug-ins; see the documentation that came with the plug-in',
        ],
        1553 => [
            'filemaker' => 1553,
            'http' => 500,
            'message' => 'Returned by plug-ins; see the documentation that came with the plug-in',
        ],
        1554 => [
            'filemaker' => 1554,
            'http' => 500,
            'message' => 'Returned by plug-ins; see the documentation that came with the plug-in',
        ],
        1555 => [
            'filemaker' => 1555,
            'http' => 500,
            'message' => 'Returned by plug-ins; see the documentation that came with the plug-in',
        ],
        1556 => [
            'filemaker' => 1556,
            'http' => 500,
            'message' => 'Returned by plug-ins; see the documentation that came with the plug-in',
        ],
        1557 => [
            'filemaker' => 1557,
            'http' => 500,
            'message' => 'Returned by plug-ins; see the documentation that came with the plug-in',
        ],
        1558 => [
            'filemaker' => 1558,
            'http' => 500,
            'message' => 'Returned by plug-ins; see the documentation that came with the plug-in',
        ],
        1559 => [
            'filemaker' => 1559,
            'http' => 500,
            'message' => 'Returned by plug-ins; see the documentation that came with the plug-in',
        ],
        1626 => [
            'filemaker' => 1626,
            'http' => 400,
            'message' => 'Protocol is not supported',
        ],
        1627 => [
            'filemaker' => 1627,
            'http' => 401,
            'message' => 'Authentication failed',
        ],
        1628 => [
            'filemaker' => 1628,
            'http' => 500,
            'message' => 'There was an error with SSL',
        ],
        1629 => [
            'filemaker' => 1629,
            'http' => 504,
            'message' => 'Connection timed out; the timeout value is 60 seconds',
        ],
        1630 => [
            'filemaker' => 1630,
            'http' => 400,
            'message' => 'URL format is incorrect',
        ],
        1631 => [
            'filemaker' => 1631,
            'http' => 503,
            'message' => 'Connection failed',
        ],
        1632 => [
            'filemaker' => 1632,
            'http' => 500,
            'message' => 'The certificate has expired',
        ],
        1633 => [
            'filemaker' => 1633,
            'http' => 500,
            'message' => 'The certificate is self-signed',
        ],
        1634 => [
            'filemaker' => 1634,
            'http' => 500,
            'message' => 'A certificate verification error occurred',
        ],
        1635 => [
            'filemaker' => 1635,
            'http' => 500,
            'message' => 'Connection is unencrypted',
        ],
        1700 => [
            'filemaker' => 1700,
            'http' => 404,
            'message' => 'Resource doesn’t exist',
        ],
        1701 => [
            'filemaker' => 1701,
            'http' => 503,
            'message' => 'Host is currently unable to receive requests',
        ],

        1702 => [
            'filemaker' => 1702,
            'http' => 500,
            'message' => 'Authentication information wasn’t provided in the correct format; verify the value of the Authorization header',
        ],
        1703 => [
            'filemaker' => 1703,
            'http' => 500,
            'message' => 'Invalid username or password, or JSON Web Token',
        ],
        1704 => [
            'filemaker' => 1704,
            'http' => 405,
            'message' => 'Resource doesn’t support the specified HTTP verb',
        ],
        1705 => [
            'filemaker' => 1705,
            'http' => 403,
            'message' => 'Required HTTP header wasn’t specified',
        ],
        1706 => [
            'filemaker' => 1706,
            'http' => 400,
            'message' => 'Parameter isn’t supported',
        ],
        1707 => [
            'filemaker' => 1707,
            'http' => 400,
            'message' => 'Required parameter wasn’t specified in the request',
        ],
        1708 => [
            'filemaker' => 1708,
            'http' => 400,
            'message' => 'Parameter value is invalid',
        ],
        1709 => [
            'filemaker' => 1709,
            'http' => 409,
            'message' => 'Operation is invalid for the resource’s current status',
        ],
        1710 => [
            'filemaker' => 1710,
            'http' => 400,
            'message' => 'JSON input isn’t syntactically valid',
        ],
        1711 => [
            'filemaker' => 1711,
            'http' => 503,
            'message' => 'Host’s license has expired',
        ],
    );

    /**
     * Convert FileMaker status codes to error message string.
     *
     * @since 1.0.0
     *
     * @param string|int $fmCode FileMaker error message.
     * @param string $fallback Fallback error message; defaults to 'Unknown error'.
     *
     * @return string Error message.
     */
    public static function getErrorMessage($fmCode, $fallback = 'Unknown error')
    {
        $fmCode = (int) $fmCode;
        if (array_key_exists($fmCode, self::$fmErrorCodes)) {
            return self::$fmErrorCodes[$fmCode]['message'];
        }

        return $fallback;
    }

    /**
     * Convert FileMaker status codes to HTTP status codes.
     *
     * @since 1.0.0
     *
     * @param string|int $fmCode FileMaker error code.
     * @param int $fallback Fallback error code; defaults to 500.
     *
     * @return int HTTP status code.
     */
    public static function getErrorCode($fmCode, $fallback = 500)
    {
        $fmCode = (int) $fmCode;
        if (array_key_exists($fmCode, self::$fmErrorCodes)) {
            return self::$fmErrorCodes[$fmCode]['http'];
        }

        return $fallback;
    }
}
