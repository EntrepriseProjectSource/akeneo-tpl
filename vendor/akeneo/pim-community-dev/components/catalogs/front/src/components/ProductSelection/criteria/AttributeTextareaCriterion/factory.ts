import {AttributeTextareaCriterionState} from './types';
import {Operator} from '../../models/Operator';

export default (state?: Partial<AttributeTextareaCriterionState>): AttributeTextareaCriterionState => {
    if (!state?.field) {
        throw Error('You need to specify the attribute code when calling the attribute criterion factory');
    }

    return {
        field: state.field,
        operator: state?.operator ?? Operator.EQUALS,
        value: state?.value ?? '',
        locale: state?.locale ?? null,
        scope: state?.scope ?? null,
    };
};
