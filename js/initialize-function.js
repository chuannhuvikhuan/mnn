//#region unknown keys
OE4BN9.unknownKeys = {};
//#endregion unknown keys

OE4BN9.settings = {};

OE4BN9.initialize = function () {
   var
      unknownKeys = OE4BN9.unknownKeys,

      vocabularies = OE4BN9.vocabularies;

   //#region settings
   var
      settings = OE4BN9.settings;

   //***************************************************************
   //#region vocabulary properties
   var
      vocabularyProperties = settings.vocabularyProperties = {
         key: 'key',
         refKey: 'refKey',
         content: 'content',
         furigana: 'furigana',
         kana: 'kana',
         roumaji: 'roumaji',
         vietnamese: 'vietnamese',
         group: 'group',
         lessonID: 'lesson_id',
         mean: 'mean'
      };
   //#endregion vocabulary properties
   //***************************************************************

   //***************************************************************
   //#region ids
   var
      ids = settings.ids = {
         unknownVocabularies: 'unknown-vocabularies',
         info: 'info',
         copyTextBox: 'copy-textbox'
      };

   //#endregion class names
   //***************************************************************

   //***************************************************************
   //#region class names
   var
      classNames = settings.classNames = {
         chapter: OE4BN9.name + '-chapter',

         vocabulary: 'vocabulary',
         vocabularyWrapper: 'vocabulary-wrapper',
         vocabularies: 'vocabularies',

         show: 'show',
         arrow: 'arrow',
      };

   $.each(vocabularyProperties, function (propertyKey, vocabularyProperty) {
      classNames[propertyKey] = vocabularyProperty;
   });

   $.each(vocabularyProperties, function (propertyKey, vocabularyProperty) {
      classNames[propertyKey] = vocabularyProperty;
   });
   //#endregion class names
   //***************************************************************

   //***************************************************************
   //#region selectors
   var
      selectors = settings.selectors = {};

   $.each(ids, function (idKey, id) {
      selectors[idKey] = '#' + id;
   });

   $.each(classNames, function (classNameKey, className) {
      selectors[classNameKey] = '.' + className;
   });
   //#endregion selectors
   //***************************************************************

   //***************************************************************
   //#region attributes
   var
      attributes = settings.attributes = {};

   $.each(vocabularyProperties, function (propertyKey, vocabularyProperty) {
      attributes[propertyKey] = vocabularyProperty;
   });
   //#endregion attributes
   //***************************************************************

   //***************************************************************
   //#region elements
   var
      elements = settings.elements = {
         $chapter: $(selectors.chapter)
      }
   //#endregion elements
   //***************************************************************

   //#endregion settings

   //***************************************************************
   //#region tag helper
   var
      tagHelper = {
         ruby: function (ruby, rt) {
            var
               result = '<ruby>'
                  + ruby
                  + '<rt>'
                  + rt
                  + '</rt>'
                  + '</ruby>';;

            return result;
         },

         vocabularyContent: function (key) {
            var
               result = '',

               vocabulary = vocabularies[key],

               content = vocabulary.content,

               roumaji = '<span class="'
                  + classNames.roumaji
                  + '">'
                  + vocabulary.roumaji
                  + '</span>';

            if (vocabulary.hasOwnProperty(vocabularyProperties.furigana)) {
               var
                  contentPaths = content.split('.'),

                  furiganaPaths = vocabulary.furigana.split('.');

               if (contentPaths.length === furiganaPaths.length) {
                  content = '';

                  $.each(contentPaths, function (index, contentPath) {
                     var
                        furiganaPath = furiganaPaths[index];

                     if (contentPath === furiganaPath) {
                        content += contentPath;
                     } else {
                        content += tagHelper.ruby(contentPath, furiganaPath);
                     }
                  });
               } else {
                  console.log(
                     '[' + key + '] '
                     + vocabulary.content
                     + ' doesn\'t match with '
                     + vocabulary.furigana);
               }
            }

            content = '<span class="'
               + classNames.content
               + '">'
               + content
               + '</span>';

            result = content + roumaji;

            return result;
         },

         vocabulary: function (key) {
            var
               result = '<span class="'
                  + classNames.vocabulary
                  + '" '
                  + attributes.key
                  + '="' +
                  key
                  + '">'
                  + key
                  + '</span>';

            return result;
         },

         info: function () {
            var
               result = '<div id="' + ids.info + '">'
                  + '<div class="container">'
                  + '<div class="content"></div>'
                  + '<div class="kana"></div>'
                  + '<div class="roumaji"></div>'
                  + '<div class="vietnamese"></div>'
                  + '<div class="mean"></div>'
                  + '</div>'
                  + '<div class="arrow"><div></div></div >'
                  + '</div>';

            return result;
         }
      };
   //#endregion tag helper
   //***************************************************************

   //***************************************************************
   //#region utilities
   var
      utilities = {};

   utilities.isUndefined = function (object) {
      if (typeof object === 'undefined') {
         return true;
      }

      return false;
   }

   utilities.addUnknownKey = function (key) {
      if (!unknownKeys.hasOwnProperty(key)) {
         unknownKeys[key] = true;

         return 0;
      }

      return 1;
   }

   utilities.printUnknownKeys = function () {
      //var
      //   output = '';

      //$.each(unknownKeys, function (unknownKey, value) {
      //   output += unknownKey + '\r\n';
      //});

      //console.log(output);
      //prompt('Ctrl+C', output);

      var
         $unknownVocabulariesElement = $(selectors.unknownVocabularies);

      if (!$.isEmptyObject(unknownKeys)) {
         $unknownVocabulariesElement.html('<ul></ul>');

         var
            $ul = $unknownVocabulariesElement.find('ul');

         $.each(unknownKeys, function (unknownKey, value) {
            $ul.append('<li>' + unknownKey + '</li>');
         });
      } else {
         $unknownVocabulariesElement.html('');
      }

      return 0;
   }

   utilities.splitVocabularies = function () {
      $(selectors.vocabularies).each(function (index) {
         var
            $vocabulariesElement = $(this),

            keys = $vocabulariesElement.text().split(" "),

            length = keys.length,

            html = '';

         $.each(keys, function (index, key) {
            if (key !== '') {
               html += tagHelper.vocabulary(key);

               if (index !== (length - 1)) {
                  html += '&#x3000;';
               }
            }
         });

         $vocabulariesElement.html(html);
      });
   }

   utilities.initializeKeyAttribute = function () {
      $(selectors.vocabulary).each(function (index) {
         var
            $vocabularyElement = $(this),

            keyAttribute = $vocabularyElement.attr(attributes.key);

         if (utilities.isUndefined(keyAttribute)) {
            $vocabularyElement.attr(attributes.key, $vocabularyElement.text());
         }
      });
   }

   utilities.initializeVocabularyContent = function () {
      utilities.splitVocabularies();

      $(selectors.vocabulary).each(function (index) {
         var
            $vocabularyElement = $(this),

            key = $vocabularyElement.attr(attributes.key);

         if (vocabularies.hasOwnProperty(key)) {
            $vocabularyElement.html(tagHelper.vocabularyContent(key));
         }
         else {
            utilities.addUnknownKey(key);
         }
      });

      return 0;
   }

   utilities.initializeInfoElement = function () {
      $('body').append(tagHelper.info());

      var
         $infoElement = $(selectors.info);

      $(document).scroll(function () {
         $infoElement.removeClass(classNames.show);
      });

      $(selectors.vocabulary).each(function (index) {
         var
            $vocabularyElement = $(this),

            key = $vocabularyElement.attr(attributes.key);

         $vocabularyElement.hover(
            function () {
               if (vocabularies.hasOwnProperty(key)) {
                  var
                     vocabulary = vocabularies[key];

                  if (vocabulary.hasOwnProperty(vocabularyProperties.refKey)) {
                     vocabulary = vocabularies[vocabulary.refKey];
                  }

                  utilities.updateInfoElementContent(vocabulary);

                  utilities.updateInfoElementPosition($vocabularyElement);

                  $infoElement.add(classNames.show);
               }
            },
            function () {
               $infoElement.removeClass(classNames.show);
            });

         $vocabularyElement.click(function () {
            utilities.copyVocabularyToClipboard(key);
         });
      });
   }

   utilities.updateInfoElementContent = function (vocabulary) {
      var
         $infoElement = $(selectors.info),

         $contentElement = $infoElement.find(selectors.content),
         $kanaElement = $infoElement.find(selectors.kana),
         $roumajiElement = $infoElement.find(selectors.roumaji),
         $vietnameseElement = $infoElement.find(selectors.vietnamese),
         $meanElement = $infoElement.find(selectors.mean),

         content = '',
         kana = '',
         roumaji = '',
         vietnamese = '',
         mean = '';

      if (vocabulary.hasOwnProperty(vocabularyProperties.content)) {
         content = vocabulary.content.replace('.', '');
      }

      if (vocabulary.hasOwnProperty(vocabularyProperties.kana)) {
         kana = vocabulary.kana;
      }

      if (vocabulary.hasOwnProperty(vocabularyProperties.roumaji)) {
         roumaji = vocabulary.roumaji;
      }

      if (vocabulary.hasOwnProperty(vocabularyProperties.vietnamese)) {
         vietnamese = vocabulary.vietnamese;
      }

      if (vocabulary.hasOwnProperty(vocabularyProperties.mean)) {
         mean = vocabulary.mean;
      }

      $contentElement.html(content);
      $kanaElement.html(kana);
      $roumajiElement.html(roumaji);
      $vietnameseElement.html(vietnamese);
      $meanElement.html(mean);

      return 0;
   }

   utilities.updateInfoElementPosition = function ($vocabularyElement) {
      var
         $infoElement = $(selectors.info),
         $arrowElement = $infoElement.find(selectors.arrow),

         offset = $vocabularyElement.offset(),

         vocacbularyWidth = $vocabularyElement.outerWidth(),
         vocabularyHeigth = $vocabularyElement.outerHeight(),

         scrollLeft = $(document).scrollLeft(),
         scrollTop = $(document).scrollTop(),

         windowWidth = $(window).width(),
         windowHeight = $(window).height(),

         elementWidth = $infoElement.outerWidth(),
         elementHeight = $infoElement.outerHeight();

      var
         left = offset.left + vocacbularyWidth / 2 - elementWidth / 2 - scrollLeft,
         bottom = windowHeight - offset.top + 10 + scrollTop;

      if (left < 0) {
         left = 0;
      } else if (left + elementWidth > windowWidth) {
         left = windowWidth - elementWidth;

         if (left < 0) {
            left = 0;
         }
      }

      $infoElement.css('left', left + 'px');
      $infoElement.css('bottom', bottom + 'px');

      $arrowElement.css(
         'left',
         offset.left + vocacbularyWidth / 2 - 10 + 'px');

      $infoElement.addClass(classNames.show);

      return 0;
   }

   utilities.copyVocabularyToClipboard = function (key) {
      if (vocabularies.hasOwnProperty(key)) {
         var
            vocabulary = vocabularies[key];

         if (vocabulary.hasOwnProperty(vocabularyProperties.refKey)) {
            vocabulary = vocabularies[vocabulary.refKey];
         }

         var
            output = '';

         output += vocabulary.content.replace('.', '');

         if (vocabulary.hasOwnProperty(vocabularyProperties.kana)) {
            output += '\r\n' + vocabulary.kana;
         }

         if (vocabulary.hasOwnProperty(vocabularyProperties.roumaji)) {
            output += '\r\n' + vocabulary.roumaji;
         }

         if (vocabulary.hasOwnProperty(vocabularyProperties.vietnamese)) {
            output += '\r\n' + vocabulary.vietnamese;
         }

         if (vocabulary.hasOwnProperty(vocabularyProperties.mean)) {
            output += '\r\n' + vocabulary.mean;
         }

         var
            $copyTextBox = $(selectors.copyTextBox);

         $copyTextBox.css('display', 'block');

         $copyTextBox.val(output).select();

         document.execCommand('copy');

         $copyTextBox.css('display', 'none');
      }
   }

   //#endregion utilities
   //***************************************************************

   //Run
   utilities.initializeKeyAttribute();
   utilities.initializeVocabularyContent();

   utilities.printUnknownKeys();

   utilities.initializeInfoElement();
}

OE4BN9.initializeVocabluaryWrappers = function () {
   var
      vocabularies = OE4BN9.vocabularies,

      settings = OE4BN9.settings,

      vocabularyProperties = settings.vocabularyProperties,

      selectors = settings.selectors,
      attributes = settings.attributes;

   $(selectors.vocabularyWrapper).each(function (index) {
      var
         $vocabularyWrapperElement = $(this),

         $vocabularyElement = $vocabularyWrapperElement.find(selectors.vocabulary),

         key = $vocabularyElement.attr(attributes.key);

      if (vocabularies.hasOwnProperty(key)) {
         var
            vocabulary = vocabularies[key],

            $kanaElement = $vocabularyWrapperElement.find(selectors.kana),
            $roumajiElement = $vocabularyWrapperElement.find(selectors.roumaji),
            $vietnameseElement = $vocabularyWrapperElement.find(selectors.vietnamese),
            $meanElement = $vocabularyWrapperElement.find(selectors.mean);

         if (vocabulary.hasOwnProperty(vocabularyProperties.kana)) {
            $kanaElement.html(vocabulary.kana);
         }

         if (vocabulary.hasOwnProperty(vocabularyProperties.roumaji)) {
            $roumajiElement.html(vocabulary.roumaji);
         }

         if (vocabulary.hasOwnProperty(vocabularyProperties.vietnamese)) {
            $vietnameseElement.html(vocabulary.vietnamese);
         }

         if (vocabulary.hasOwnProperty(vocabularyProperties.mean)) {
            $meanElement.html(vocabulary.mean);
         }
      }
      else {
         utilities.addUnknownKey(key);
      }
   });
}
