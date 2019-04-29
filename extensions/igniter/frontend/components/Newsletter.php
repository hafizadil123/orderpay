<?php namespace Igniter\Frontend\Components;
use Admin\Traits\ValidatesForm;
use Igniter\Frontend\Models\Subscriber;
use Redirect;
class Newsletter extends \System\Classes\BaseComponent
{
    use ValidatesForm;

    public function onRun()
    {
        $this->page['subscribeHandler'] = $this->getEventHandler('onSubscribe');
    }

    public function onSubscribe()
    {
        $data = post();

        $rules = [
            ['email', 'required|email'],
        ];



        $this->validate($data, $rules);

        if (Subscriber::whereEmail($data['subscribe_email'])->first()) {
            flash()->success(lang('igniter.frontend::default.newsletter.alert_success_existing'))->now();
        }
        else {
            $subs = new Subscriber(['email' => $data['subscribe_email']]);
            $subs->save();
        //    Subscriber::create($data);
            flash()->success(lang('igniter.frontend::default.newsletter.alert_success_subscribed'))->now();
        }

        // $this->pageCycle();

        // return [
        //     '^#newsletter-box' => $this->renderPartial('@default'),
        // ];
        $redirectUrl = $this->controller->pageUrl($this->property('redirectPage'));

        if ($redirectUrl = get('redirect', $redirectUrl))
            return Redirect::to($redirectUrl);
    }
}
