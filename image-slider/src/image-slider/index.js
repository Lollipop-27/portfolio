import { registerBlockType } from '@wordpress/blocks';
import Edit from './edit';
import './style.scss';
import './editor.scss';

registerBlockType('portfolio/image-slider', {
    edit: Edit,
    save: () => null, // dynamic block
});
