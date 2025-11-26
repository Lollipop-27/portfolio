import { useBlockProps, MediaUpload, MediaUploadCheck } from '@wordpress/block-editor';
import { Button } from '@wordpress/components';

export default function Edit({ attributes, setAttributes }) {
    const blockProps = useBlockProps();
    const { items } = attributes;

    const onSelectItems = (newItems) => {
        setAttributes({ items: newItems.map(item => ({ id: item.id, url: item.url, alt: item.alt })) });
    };

    return (
        <div {...blockProps} className="image-slider-editor">
            <MediaUploadCheck>
                <MediaUpload
                    onSelect={onSelectItems}
                    allowedTypes={['image']}
                    multiple
                    gallery
                    value={items.map(img => img.id)}
                    render={({ open }) => (
                        <Button onClick={open} variant="primary">
                            {items.length ? 'Edit Images' : 'Add Images'}
                        </Button>
                    )}
                />

            </MediaUploadCheck>

            <div className="slider-preview">
                {items.length ? items.map(img => (
                    <img key={img.id} src={img.url} alt="" />
                )) : <p>No images selected</p>}
            </div>
        </div>
    );
}
