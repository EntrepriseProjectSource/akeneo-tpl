import React from 'react';
import {IllustrationProps} from './IllustrationProps';
import Users from '../../static/illustrations/Users.svg';

const UsersIllustration = ({title, size = 256, ...props}: IllustrationProps) => (
  <svg width={size} height={size} viewBox="0 0 256 256" {...props}>
    {title && <title>{title}</title>}
    <image href={Users} />
  </svg>
);

export {UsersIllustration};
