import React, {useCallback, useEffect, useState} from 'react';

import {useTranslate} from '@akeneo-pim-community/shared';
import {AttributeOption, Locale} from '../model';
import {EditingOptionContextProvider, useLocalesContext} from '../contexts';
import AttributeOptionForm from './AttributeOptionForm';

interface EditProps {
  option: AttributeOption;
  saveAttributeOption: (attributeOption: AttributeOption) => void;
}

const Edit = ({option, saveAttributeOption}: EditProps) => {
  const translate = useTranslate();
  const locales = useLocalesContext();
  const [updatedOption, setUpdatedOption] = useState<AttributeOption>(option);

  useEffect(() => {
    setUpdatedOption(option);
  }, [option]);

  const onUpdateOptionLabel = useCallback(
    (newLabel: string, localeCode: string) => {
      setUpdatedOption(updatedOption => {
        const newOption: AttributeOption = {
          ...updatedOption,
        };
        newOption.optionValues[localeCode].value = newLabel;

        return newOption;
      });
    },
    [setUpdatedOption]
  );

  const onSubmit = useCallback(
    (event: any) => {
      event.preventDefault();
      saveAttributeOption(updatedOption);
    },
    [saveAttributeOption, updatedOption]
  );

  return (
    <EditingOptionContextProvider option={option}>
      <form className="AknSubsection AknAttributeOption-edit" onSubmit={onSubmit}>
        <div className="AknSubsection-title AknSubsection-title--glued tabsection-title">
          <span>{translate('pim_enrich.entity.attribute_option.module.edit.options_labels')}</span>
        </div>
        <div className="AknAttributeOption-edit-translations">
          {locales.map((locale: Locale) => (
            <AttributeOptionForm
              key={`option-form-${option.code}-${locale.code}`}
              option={option}
              locale={locale}
              onUpdateOptionLabel={onUpdateOptionLabel}
            />
          ))}
        </div>
        <div className="AknAttributeOption-edit-saveTranslations">
          <button className="AknButton AknButton--apply save" role="save-options-translations" type="submit">
            {translate('pim_common.done')}
          </button>
        </div>
      </form>
    </EditingOptionContextProvider>
  );
};

export default Edit;
